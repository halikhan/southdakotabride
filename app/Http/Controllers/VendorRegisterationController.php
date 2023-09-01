<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\checkout;
use App\Models\location;
use App\Models\packages;
use Illuminate\Support\Str;
use App\Models\UserLocation;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class VendorRegisterationController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function vendor_store(Request $request)
    {
        // dd('check dataaaa');
        // dd($request->all());

        $this->validate($request, [
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'locations' => "required|max:255",
            'bussinessCategory' => "required|max:255",
            'contact' => "required|max:255",
            'company' => "required|max:255",
            'email' => 'required|email|unique:users',
            'name' => 'required|unique:users',

        ]);

        if(Auth::check()){
        $notification = array('message' =>'You are already logged in! ' , 'alert-type'=>'error' );
        return redirect()->back()->with($notification);
        }else {
            $userslug = new User();
            $userslug->slug = Str::slug($request->name,"-");
            $userslug->email = $request->email;
            $userslug->save();

            // dd($request->all());
               $arrReg = [
                'email' => $request->email,
                'name' => $request->name,
                'slug' => Str::slug($request->name,"-"),
                'company' => $request->company,
                'bussinessCategory' => $request->bussinessCategory,
                'contact' => $request->contact,
                'password' => $request->password,
                'show_password' => $request->password,
            ];

            $user_locations = [
                'locations' => json_encode($request->locations),
            ];

            // $user_locations = new UserLocations();
            // user_locations->locations = json_encode($request->locations);
            // $user_locations->save();


               session()->put('VednorReg', $arrReg);
               session()->put('VednorLocation', $user_locations);
                // dd(session()->get('VednorReg'));
        }

        return redirect()->route('packages');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        // session()->put('checkout', $arr);
    }

    public function store_vendor_payment(Request $request)
    {

        // dd($request->all());


        User::updateOrCreate(
            [
                'email'   => session()->get('VednorReg')['email'],
             ],
            [
            'name' => session()->get('VednorReg')['name'],
            'email' => session()->get('VednorReg')['email'],
            'slug' => session()->get('VednorReg')['name'],
            'company' => session()->get('VednorReg')['company'],
            'contact' => session()->get('VednorReg')['contact'],
            'bussinessCategory' => session()->get('VednorReg')['bussinessCategory'],
            'type' => 2,
            'password' => Hash::make(session()->get('VednorReg')['password']),
            'show_password' => session()->get('VednorReg')['password'],

        ]);



        $userdertails = User::latest()->first();

        // dd($userdertails);

        UserLocation::create([
            'user_id' =>$userdertails->id,
            'locations' => session()->get('VednorLocation')['locations'],
        ]);

        // foreach ($request->session()->get('VednorLocation')['locations'] as $item) {
        //     $savevednor = new UserLocation();
        //     $savevednor->user_id = $userdertails->id;
        //     $savevednor->locations = $item;
        //     $savevednor->save();
        // }

        $get_package = packages::find(session()->get('package_id'));
            PaymentDetail::create([
                // 'response'=> $request->response,
                'user_id' =>$userdertails->id,
                'package_title' => $get_package->title,
                'package_amount' => $get_package->amount,
                'paypal_response' => json_encode($request->all()),
            ]);

        // dd(session()->get('VednorReg')['slug']);

        $data = [
            'name' => session()->get('VednorReg')['name'],
            'email' => session()->get('VednorReg')['email'],

        ];
        $emailToSend = session()->get('VednorReg')['email'];
        Mail::send('website.register.vendor_register', ['data' => $data], function ($messages) use ($emailToSend) {
            $messages->to($emailToSend);
            $messages->subject('Vendor Registration');
        });

        session()->forget('VednorReg');
        session()->forget('VednorLocation');
        // session()->forget('authenticated');

        return response()->json([
            'status' => 200
        ]);

    }

    public function update_vendor_payment(Request $request)
    {

        // dd($request->all());

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $packageSubs = PaymentDetail::where('user_id', Auth::id())->orderBy('id', 'desc')->first();

            // if response true it return empty
            if (empty($response)) {
                $response = $provider->cancelSubscription(json_decode($packageSubs->paypal_response)->subscriptionID, 'Update the vendor plan');
                }



        $get_package = packages::find(session()->get('package_id'));
            PaymentDetail::create([
                'user_id' => Auth::id(),
                'package_title' => $get_package->title,
                'package_amount' => $get_package->amount,
                'paypal_response' => json_encode($request->all()),
            ]);

        session()->forget('package_id');

        return response()->json([
            'status' => 200
        ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

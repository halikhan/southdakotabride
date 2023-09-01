<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\vendorManagement;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class VednorsController extends Controller
{
    public function index()
    {
        // dd('here');
        $getCMS = User::where('type',2)->with('get_vednorbusinesscategory')->latest()->get();
        return view('adminVendor.index',get_defined_vars());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        $getServiceNames = service::all();
        return view('adminVendor.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('here');
        // dd($request->all());
        $this->validate($request, [
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'bussinessCategory' => "required|max:255",
            'email' => 'required|unique:users',
            'name' => "required|unique:users",
        ]);

        $cms = new User();
        $cms->name = $request->name;
        $cms->bussinessCategory = $request->bussinessCategory;
        $cms->email = $request->email;
        $cms->slug = Str::slug($request->name,'-');
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        // $cms->type = $request->type;
        $cms->type = 2;
        $cms->password = Hash::make($request->password);
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('adminVendor')->with($notification);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //  dd($id);
         $getServiceNames = service::all();
         $edit_data = User::where('slug',$slug)->first();
         return view('adminVendor.edit',get_defined_vars());
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

        $this->validate($request, [
            'password' => 'same:confirm_password',
            'name' => "required",
            'bussinessCategory' => "required|max:255",
            'email' => 'required',

            // 'faeture' => "required",
        ]);

        $cms = User::findOrFail($id);
        $cms->name = $request->name;
        $cms->slug = Str::slug($request->name,'-');
        $cms->bussinessCategory = $request->bussinessCategory;
        $cms->email = $request->email;
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        // $cms->type = $request->type;
        $cms->type = 2;
        if($request->password == null){
            $cms->password = $request->prevpassword;
        }else {
            $cms->password = Hash::make($request->password);
            $cms->show_password = $request->password;
        }
        $cms->save();
        $notification = array('message' =>'Your data Updated Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('adminVendor')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $cms = User::where('slug',$slug)->first();
        Storage::delete('public/uploads/cms/'.$cms->image);
        $cms->delete();
        return redirect()->route('adminVendor');

    }

    public function vendor_status(Request $request,$id)
    {
        // return "status";
         $vendor_status =  User::findOrFail($id);
         $newStatus = ($vendor_status->status == 0) ? 1 : 0;
         $vendor_status->status = $newStatus;
         if($newStatus == 1){
            $user = User::where('id',$id)->first();
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->show_password
            ];
            $emailToSend = $user->email;
            Mail::send('website.vendormail.credentials', ['data' => $data],
            function ($message) use ($emailToSend)
            {
                $message->to($emailToSend)->subject('Credentials');
            });
        }
        $vendor_status->save();
        $notification = array('message' =>'Vendor Status Changed Successfully' , 'alert-type'=>'success' );
        return redirect()->back()->with($notification);

    }

}

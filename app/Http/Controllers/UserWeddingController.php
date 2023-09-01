<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\service;
use App\Models\wedding;
use App\Models\BookVendor;
use App\Models\engagement;
use Illuminate\Support\Str;
use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserWeddingController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('here');
        $getWeddingdetails = wedding::where('user_id',Auth::user()->id)->get();
        return view('user-dashboard.userWedding.index',get_defined_vars());

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
        return view('user-dashboard.userWedding.create',get_defined_vars());

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
            'content' => "required",
            'vendor' => "required|max:255",
            'service' => "required|max:255",
            'date' => "required",
            'location' => "required",
            'bride' => "required|max:255",
            'groom' => "required",
            'ceremony' => "required",
            'wedding_image' => "required",
            'image'=> "required",
        ]);

        $cms = new wedding();
        $cms->user_id = Auth::user()->id;
        $random = Str::random(4);
        $cms->slug = Str::slug($request->groom.'-'.$random);
        $cms->groom = $request->groom;
        $cms->bride = $request->bride;
        $cms->ceremony = $request->ceremony;
        $cms->service = json_encode($request->service);
        $cms->vendor = json_encode($request->vendor);
        $cms->location = $request->location;
        $cms->date = $request->date;
        $cms->content = $request->content;
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->save();
        $countForAmount = 0;
        foreach ($request->vendor as $item) {
            $savevednor = new BookVendor();
            $savevednor->user_id = Auth::user()->id;
            $savevednor->wedding_id = $cms->id;
            $savevednor->vendor_id = $item;
            $savevednor->service =isset($request->service[$countForAmount]);
            $countForAmount++;
            $savevednor->save();
        }


        $images = [];
        if($request->hasfile('wedding_image'))
         {
            foreach($request->file('wedding_image') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('storage/uploads/cms/'), $name);
                $images[] = $name;
            }
        }
        $file= new ImageGallery();
        $file->wedding_id =  $cms->id;
        $file->user_id = Auth::user()->id;
        $file->ceremony = $request->ceremony;
        $file->image = json_encode($images);
        $file->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('user-wedding')->with($notification);


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //  $edit_data = wedding::find($id);
         $edit_data = wedding::where('slug',$slug)->first();
         $getUserWeddingimages = ImageGallery::where('wedding_id',$edit_data->id)->first();
          return view('user-dashboard.userWedding.show',get_defined_vars());

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
        $edit_data = wedding::where('slug',$slug)->first();
        $getUserWeddingimages = ImageGallery::where('wedding_id',$edit_data->id)->first();
        $getServiceNames = service::all();
        $getvendorslist = User::where('type',2)->get();
        return view('user-dashboard.userWedding.edit',get_defined_vars());


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

            'content' => "required",
            'vendor' => "required|max:255",
            'service' => "required|max:255",
            'date' => "required",
            'location' => "required",
            'bride' => "required|max:255",
            'groom' => "required",
            'ceremony' => "required",

        ]);

        $cms = wedding::findOrFail($id);
        $cms->user_id = Auth::user()->id;
        $cms->groom = $request->groom;
        $cms->ceremony = $request->ceremony;
        $cms->bride = $request->bride;
        $cms->service = json_encode($request->service);
        $cms->vendor = json_encode($request->vendor);
        $cms->location = $request->location;
        $cms->date = $request->date;
        $cms->content = $request->content;
        $cms->save();
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->save();


         $countForAmount = 0;
         foreach ($request->vendor as $item) {
             $savevednor =  BookVendor::findOrFail($id);
             $savevednor->user_id = Auth::user()->id;
             $savevednor->wedding_id = $cms->id;
             $savevednor->vendor_id = $item;
             $savevednor->service =isset($request->service[$countForAmount]);
             $countForAmount++;
             $savevednor->save();
         }

        $images = [];
        if($request->hasfile('wedding_image'))
         {
            foreach($request->file('wedding_image') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('storage/uploads/cms/'), $name);
                $images[] = $name;
            }
        }

        $file=  ImageGallery::findOrFail($id);
        $file->wedding_id =  $cms->id;
        $file->user_id = Auth::user()->id;
        $file->ceremony = $request->ceremony;
        $file->image = json_encode($images);
        if($request->hasFile('wedding_image') == null){
            $file->image = $request->old_wedding_image;
        }
        $file->save();
        $notification = array('message' =>'Your data Updated Successfully' , 'alert-type'=>'success' );
        return redirect()->route('user-wedding')->with($notification);
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        // dd($id);
        $cms = wedding::where('slug',$slug)->first();
        $cms->delete();
        $file= ImageGallery::where('wedding_id',$cms->id)->first();
        foreach(json_decode($file->image) as $image){
            Storage::delete('public/uploads/cms/'.$image);
        }
        $file->delete();
        return back();

    }

    public function services_type_status(Request $request)
    {
        // dd($request->all());
        $package_type_Status = User::where('bussinessCategory', $request->id)->where('type',2)->get();
        return ["status" => "true", "data" => $package_type_Status];
    }

    public function gallery () {

        // dd('heere');
         $getWeddingdetails = wedding::where('user_id',Auth::user()->id)->get();
         $getWeddingimages = ImageGallery::where('user_id',Auth::user()->id)->get();

        return view('user-dashboard.userWedding.gallery',get_defined_vars());
    }

}

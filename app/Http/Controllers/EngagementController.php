<?php

namespace App\Http\Controllers;

use App\Models\wedding;
use App\Models\engagement;
use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EngagementController extends Controller
{

    public function index()
    {
        // dd('here');
        $getCMS = wedding::where('ceremony','2')->get();
        return view('engagement.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('engagement.create');

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
            'date' => "required|max:255",
            'location' => "required|max:255",
            'bride' => "required|max:255",
            'groom' => "required|max:255",
        ]);

        $cms = new wedding();
        $cms->groom = $request->groom;
        $cms->bride = $request->bride;
        $random = Str::random(4);
        $cms->slug =  Str::slug($request['groom'].'-'.$random);
        $cms->location = $request->location;
        $cms->date = $request->date;
        $cms->content = $request->content;
        $cms->ceremony = 2;

        if($image = $request->file("image")) {
            $imageName = $image->getClientOriginalName();
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->save();

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
        return redirect()->route('admin_engagement')->with($notification);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $edit_data = wedding::where('slug',$slug)->first();
         $getUserWeddingimages = ImageGallery::where('wedding_id',$edit_data->id)->first();
         return view('engagement.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
         // dd($id);
         $edit_data = wedding::where('slug',$slug)->first();
         $getUserWeddingimages = ImageGallery::where('wedding_id', $edit_data->id)->first();
         return view('engagement.edit',get_defined_vars());
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
            'date' => "required|max:255",
            'location' => "required|max:255",
            'bride' => "required|max:255",
            'groom' => "required|max:255",
        ]);

        $cms = wedding::findOrFail($id);
        $cms->groom = $request->groom;
        $cms->bride = $request->bride;
        $cms->slug =  Str::slug($request['groom'].' '. $request['bride']);
        $cms->location = $request->location;
        $cms->date = $request->date;
        $cms->content = $request->content;
        $cms->ceremony = 2;

        if($image = $request->file("image")) {
            $imageName = $image->getClientOriginalName();
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->save();
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
        $file->save();
        $notification = array('message' =>'Your data Updated Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('admin_engagement')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $cms = wedding::where('slug',$slug)->first();
        Storage::delete('public/uploads/cms/'.$cms->image);
        $cms->delete();
        $file= ImageGallery::where('wedding_id',$cms->id)->first();
        foreach(json_decode($file->image) as $image){
            Storage::delete('public/uploads/cms/'.$image);
        }
        $file->delete();
        return redirect()->route('admin_engagement');
    }
}

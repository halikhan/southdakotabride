<?php

namespace App\Http\Controllers;

use App\Models\cms;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CmsController extends Controller
{
    public function projects_Index(){
        $getpages= Page::get();
        $getCMS = cms::with('getPageName')->get();
        // return  $getCMS;
        // dd( $getCMS);
        return view('pagecontent.index',get_defined_vars());

    }
    public function project_create(){
        $getpages= Page::all();
        // dd('here');
        return view('pagecontent.create',get_defined_vars());

    }
    public function project_add(Request $request){

        // dd('here');
        // return $request->all();
        // $this->validate($request, [
        //     'title1' => "required|max:255",
        //     'title2' => "required|max:255",
        //     'title3' => "required|max:255",
        //     'title4' => "required|max:255",
        //     'image' => "required",
        //     'content' => "required",
        // ]);

        $cms = new cms();
        $cms->page = $request->page;
        $cms->title = $request->title;
        // $cms->slug= Str::slug($request->title,'-');
        // return $cms->slug;
        $cms->title1 = $request->title1;
        $cms->slug= Str::slug($request->title1,'-');
        $cms->title2 = $request->title2;
        $cms->title3 = $request->title3;
        $cms->title4 = $request->title4;
        $cms->content = $request->content;
        $cms->description2 = $request->description2;
        $cms->description3 = $request->description3;
        $cms->section_name = $request->section_name;
        if($file = $request->file("pdf")) {
            $fileName = date("Y-m-d") . '__' . time() . "__" . $file->getClientOriginalName();
            $file->move(public_path('storage/uploads/cms/'), $fileName);
            $cms->image = $fileName;
        }
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        if($image2 = $request->file("image2")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image2->getClientOriginalName();
            $image2->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image2 = $imageName;
        }
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('PageContent')->with($notification);
    }
    public function project_edit($slug){

        // dd($id);
        $edit_data = cms::where('slug',$slug)->first();
        return view('pagecontent.edit',get_defined_vars());

    }

    public function project_update(Request $request, $id){

            // $this->validate($request,[
            //     'title4' => "required|max:255",
            //     'title3' => "required|max:255",
            //     'title2' => "required|max:255",
            //     'title1' => "required|max:255",
            // ]);

        $cms = cms::findOrFail($id);
        $cms->page = $request->page;
        $cms->title = $request->title;
            // return $slug;
        $cms->title1 = $request->title1;
        $cms->slug= Str::slug($request['title1'].' '. $request['title2'].' '. $request['title3'].' '. $request['title4']);
        $cms->title2 = $request->title2;
        $cms->title3 = $request->title3;
        $cms->title4 = $request->title4;
        if($request->id == '4'){
            $cms->slug= Str::slug($request->title.'-banner','-');
        }elseif($request->title) {
            $cms->slug= Str::slug($request->title,'-');
        }if($request->id == '34'){
            $cms->slug= Str::slug($request->title.'-welcome','-');
        }
        $cms->content = $request->content;
        $cms->description2 = $request->description2;
        $cms->description3 = $request->description3;
        $cms->section_name = $request->section_name;
        // $cms->content_two = $request->content_two;
        if($pdf = $request->file("pdf")) {
            $fileName = date("Y-m-d") . '__' . time() . "__" . $pdf->getClientOriginalName();
            $pdf->move(public_path('storage/uploads/cms/'), $fileName);
            $cms->pdf = $fileName;
        }
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        if($image2 = $request->file("image2")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image2->getClientOriginalName();
            // $image->storeAs("public/uploads/cms", $imageName);
            $image2->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image2 = $imageName;
        }

        $cms->save();
        $notification = array('message' =>'Your data Updated Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('PageContent')->with($notification);

    }

    public function project_destroy($id)
    {
        // dd($id);
        //$request->all();
        $cms = cms::find($id);
        Storage::delete('public/uploads/cms/'.$cms->image);
        $cms->delete();
        return redirect()->route('PageContent');

    }
}

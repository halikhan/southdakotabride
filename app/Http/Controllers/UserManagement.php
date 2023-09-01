<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  dd('here');
        //  $getCMS = User::where('type','>',1)->get();
         $getCMS = User::where('type',3)->get();
        //  dd($getCMS);
         return view('users.index',get_defined_vars());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('users.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'email' => 'required|email|unique:users',
            'name' => "required|unique:users",
        ]);
        $cms = new User();
        $cms->name = $request->name;
        
        $cms->slug = Str::slug($request->name,'-');
        $cms->email = $request->email;
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        // $cms->type = $request->type;
        $cms->type = 3;
        $cms->password = Hash::make($request->password);
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('user')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('here');
        // return $show_data;

        // return $get_user = User::where('id', $id)->where('type',2)->get();
        //    $get_user = User::where('id', $id)->where('type',3)->get();
        // $get_user = User::where('id', $id)->where('type',4)->get();


        if (User::where('id', $id)->where('type',2)->first())
        {
            // dd('User');
              $show_data = User::where('id', $id)->with('admin_studentData.get_coaches_for_admin_show_user')->with('admin_studentData.get_timeSlot')->get();
             return view('users.show',get_defined_vars());

        }
        elseif (User::where('id', $id)->where('type',3)->first())
        {
            // dd('Coach');
              $show_data = User::where('id', $id)->with('admin_coachData.get_admin_show_Students')->with('admin_coachData.get_timeSlot')->get();
            return view('users.showCoach',get_defined_vars());

        }
        elseif (User::where('id', $id)->where('type',4)->first())
        {
            // dd('Evaluator');
              $show_data = User::where('id', $id)->with('admin_EvaluatorData.admin_show_Students_for_Evaluator')->get();
            return view('users.showEvaluator',get_defined_vars());

        }else{

            $notification = array('message' =>'Your data is not available' , 'alert-type'=>'error' );
            return back()->with($notification);
        }
        // $show_data = User::where('id', $id)->where('type', 2)->with('messagesSent.get_coaches_for_admin_show_user')->get();

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
         $edit_data = User::where('slug',$slug)->first();
         return view('users.edit',get_defined_vars());
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
        // dd($request->all());
        $this->validate($request, [
            'password' => 'same:confirm_password',
            'email' => "required",
            'name' => "required",
        ]);

        // return $request->all();
        $cms = User::findOrFail($id);
        $cms->name = $request->name;
        $cms->slug = Str::slug($request->name,'-');
        $cms->email = $request->email;
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->type = 3;
        if($request->password == null){
            $cms->password = $request->prevpassword;
        }else {
            $cms->password = Hash::make($request->password);
        }
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully' , 'alert-type'=>'success' );
        return redirect()->route('user')->with($notification);

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
        return redirect()->route('user');
    }

    public function user_status(Request $request,$id)
    {
        // return "status";
        $user_status = User::findOrFail($id);
        $newStatus = ($user_status->status == 0) ? 1 : 0;
        $user_status->status = $newStatus;

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
                $message
                    ->to($emailToSend)->subject('Credentials');
            });
        }

        // return $user->email;

        // return $schedule_status;
        $user_status->save();
        $notification = array('message' =>'Vendor Status Changed Successfully' , 'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }

}

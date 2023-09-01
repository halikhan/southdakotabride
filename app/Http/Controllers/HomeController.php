<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\BackgroundAudio;
use App\Models\Blog;
use App\Models\cms;
use App\Models\Config;
use App\Models\Frontend;
use App\Models\packages;
use App\Models\sociallink;
use App\Models\User;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{



    public function home(){

        // dd('home');
        // $getCMS = User::where('type', '1')->get();
        $getsociallinks = sociallink::all();
        $getSponsors = cms::all();
        $getGallery = Blog::all();
        $getPiyano = video::where('title','piyano')->get();
        $getBackAudio= BackgroundAudio::all();
        $getAudio= Audio::all();
        $getGuitar = video::where('title','guitar')->get();
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getahome = Frontend::where('page', '17')->get();
        $getahomeQuote = Frontend::where('page', '18')->get();
        $getahomeMainHeading = Frontend::where('page', '19')->get();
        $getMusic = Frontend::where('page', '20')->get();
        return view('home',get_defined_vars());

    }

    // public function getContent($page_id){

    //     // dd($page_id);
    //     $getCopyrights = Config::where('email_type','Copyrights')->get();
    //     $getabout = Frontend::where('id', $page_id)->get();
    //     return view('Frontend.about-amea',get_defined_vars());
    // }

    public function about(){

        // dd('home');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getabout = Frontend::where('page', '1')->get();
        return view('Frontend.about-amea',get_defined_vars());
    }
    public function BandRoom(){

        // dd('BandRoom');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getBandRoom = Frontend::where('page', '2')->get();
        return view('Frontend.Band-Room',get_defined_vars());
    }

    public function AmeaToday(){

        // dd('AmeaToday');
        // $getAmeaToday = Frontend::where('page', '')->get();
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getpackages = packages::all();
        return view('Frontend.acees-amea-today',compact('getCopyrights','getpackages'));


    }



    public function educators(){

        // dd('educators');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getEducators = Frontend::where('page', '3')->get();
        return view('Frontend.educators',get_defined_vars());

    }

    public function educatorsBoosters(){

        // dd('educatorsBoosters');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getEducatorsBooster = Frontend::where('page', '4')->get();
        return view('Frontend.educators-Boosters',get_defined_vars());

    }


    public function educatorsbylaws(){

        // dd('educatorsBoosters');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getEducatorslaws = Frontend::where('page', '5')->get();
        return view('Frontend.educators-by-laws',get_defined_vars());

    }
    public function educatorsFundRaising(){

        // dd('educators-fund-raising');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $geteducatorsFundRaising = Frontend::where('page', '6')->get();
        return view('Frontend.educators-fund-raising',get_defined_vars());

    }

    public function PreFestival(){

        // dd('educators-fund-raising');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getPreFestival = Frontend::where('page', '7')->get();
        return view('Frontend.Pre-Festival',get_defined_vars());
    }


    public function privateInstructors(){

        // dd('educators-fund-raising');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getprivateInstructors = Frontend::where('page', '8')->get();
        return view('Frontend.private-instructors',get_defined_vars());
    }

    public function privateInstrumental(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getprivateInstrumental = Frontend::where('page', '9')->get();
        return view('Frontend.private-instrumental',get_defined_vars());
    }
    public function privateDance(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getprivateDance = Frontend::where('page', '10')->get();
        return view('Frontend.private-dance',get_defined_vars());
    }
    public function privateVocal(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getprivateVocal = Frontend::where('page', '11')->get();
        return view('Frontend.private-vocal',get_defined_vars());
    }
    public function privateallStatePre(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getPrivateallStatePre = Frontend::where('page', '12')->get();
        return view('Frontend.private-all-state-pre',get_defined_vars());
    }

    public function ArrangersComposer(){

        // dd('educators-fund-raising');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getArrangersComposer = Frontend::where('page', '14')->get();
        return view('Frontend.Arrangers-Composer',get_defined_vars());
    }
    public function moreSingers(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getmoreSingers = Frontend::where('page', '15')->get();
        return view('Frontend.more-singers',get_defined_vars());
    }
    public function MusicProducers(){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getMusicProducers = Frontend::where('page', '16')->get();
        return view('Frontend.Music-Producers',get_defined_vars());
    }

    public function orderSummary(Request $request, $id){

        // dd('privateInstrumental');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        $getOrderSummaryPagecontent = Frontend::where('page', '21')->get();
        $getOrderSummary = packages::find($id);
        //  $getOrderSummary = packages::findORfail($id);
        // $getOrderSummary->title = $request->title;
        // $getOrderSummary->deatails = $request->deatails;
        // $getOrderSummary->amount = $request->amount;
        // $getOrderSummary->save();
        return view('Frontend.order-summary',get_defined_vars());
    }

    public function checkout(Request $request, $id){

        // $data['User_Signup'] = Session::get('User_Signup');
        // if(!Auth::check()) {
        //     $notification = array('UserMessage' =>'Dear User, please Login first' , 'alert-type'=>'error' );
        //      return back()->with($notification);
        // }else{


        // }
        // $getUser = User::find(Auth::user()->id);
        // dd($getUser);
        $getCopyrights = Config::where('email_type','Copyrights')->get();

        $getOrderSummary = packages::find($id);
        return view('Frontend.checkout',get_defined_vars());

    }

    public function buyNow(){

        // dd('AmeaToday_Bynow');
        $getCopyrights = Config::where('email_type','Copyrights')->get();
        return view('Frontend.buy-now',get_defined_vars());
    }


    public function dashboard(Request $request){

        // dd('AmeaToday_Bynow');
        $getCopyrights = Config::where('email_type','Copyrights')->get();

        if(session()->has('authenticated')) {
            return view('user_dashboard.profile.edit');
        }else{
            $edit_data = User::find(Auth::user()->id);
            $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
            return view('user_dashboard.profile.edit',get_defined_vars())->with($notification,);
        }

    }


}

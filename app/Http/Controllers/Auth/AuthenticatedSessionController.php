<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        // dd('here');
        // return view('auth.login');
        $notification = array('message' =>'Your have Logout Successfully..!! ' , 'alert-type'=>'success' );
        return view('auth.login')->with($notification);

    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        $notification = array('message' =>'Your have Login Successfully..!! ' , 'alert-type'=>'success' );
        return redirect()->intended(RouteServiceProvider::HOME)->with($notification);

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
        // $notification = array('message' =>'Your have Logout Successfully..!! ' , 'alert-type'=>'success' );
        // return redirect('/admin')->with($notification);
    }
}

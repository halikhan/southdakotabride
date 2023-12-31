<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->type == 3 ){
            return $next($request);
        }

        if(Auth::check() && Auth::user()->type == 4 ){
        //  dd('hello');
             return  $next($request);
        }

        $response = $next($request);
        $response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
             $response->headers->set('Pragma','no-cache');
             $response->headers->set('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
             return $response;
    }
}

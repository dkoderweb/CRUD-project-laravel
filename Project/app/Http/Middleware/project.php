<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class project
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
        // echo 'hi from middelware';
        $path=$request->path();
         if(($path=="login" || $path=="register") && Session::get('user')){
            return redirect('/');
        }
        elseif(($path!=="login" && !Session::get('user')) && ($path!=="register" && !Session::get('user')) && ($path!=="reset" && !Session::get('user')) && ($path!=="passwordreset" && !Session::get('user')) && ($path!=="updatepassword" && !Session::get('user'))  && ($path!=="update_pass" && !Session::get('user'))){
            Session::flash('first','You are not logged in!');
            return response()->view('login');
        }
        
        return $next($request);
    }
}

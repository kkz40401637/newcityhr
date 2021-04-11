<?php

namespace App\Http\Middleware;

use Closure;
use AuthenticatesUsers;
use \Illuminate\Support\Facades\Auth;


class Ban
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth::check()){
            $UserStatus = auth::user()->status;
            if ($UserStatus == '0' || $UserStatus == 0)
            {
                auth::logout();
                return redirect()->route('login');
            }else{
                return $next($request); // this is the request back ( the request which is comming this middle ) important
            }
        }else{
            auth::logout();
            return redirect()->route('login');
        }

        // for debug instant of return you must to use dd(); // comment from yellhtut ( yellhtut.com )
    }
}

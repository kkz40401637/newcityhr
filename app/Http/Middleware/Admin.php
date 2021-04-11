<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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

//        return $next($request);
        if (auth::check()){
            $UserRole = auth::user()->role;
            if ($UserRole != 1 )
            {

               if($UserRole == 2 ){
                    return redirect()->route('HeadDashboard');
               }else if($UserRole == 3 ){
                    return redirect()->route('LeadDashboard');
               }else if($UserRole == 4 ){
                   return redirect()->route('StaffDashboard');
               }

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

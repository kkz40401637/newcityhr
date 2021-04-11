<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class StaffDashboard
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
            $UserRole = auth::user()->role;
            if ($UserRole != 4 )
            {
                if ($UserRole == 1 ){
                    return redirect()->route('AdminDashboard');
                }else if($UserRole == 2 ){
                    return redirect()->route('HeadDashboard');
                }else if($UserRole == 3 ){
                    return redirect()->route('LeadDashboard');
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
    }
}

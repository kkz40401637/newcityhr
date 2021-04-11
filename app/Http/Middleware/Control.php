<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Control
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
            if ($UserRole > 3 )
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
    }
}

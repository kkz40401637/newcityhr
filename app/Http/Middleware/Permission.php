<?php

namespace App\Http\Middleware;

use App\Http\Requests;
use Closure;
use App\Role;
use App\User;
class Permission
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

        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); // get all url
        @$RoleDb = Role::find(auth()->user()->role);
        if (!empty($RoleDb)){
            $Permission = json_decode($RoleDb->Permission);
        }
//        dd(count($uriSegments));
        if (count($uriSegments) >= 2)
        {
            $PresentPermission =  $uriSegments[1]; // url segment
        }

        if (!empty($PresentPermission) && !empty($Permission))
        {
            if (in_array($PresentPermission,$Permission))
            {
                return $next($request);
            }else{
                return  redirect()->back();
            }
        }else{
            return $next($request);
        }

    }
}

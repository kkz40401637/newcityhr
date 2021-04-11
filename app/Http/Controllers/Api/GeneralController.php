<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Twodigit;
use App\User;
use Illuminate\Http\Request;

class GeneralController extends Controller
{

    public function UserType(Request $In)
    {

        if (!empty($In->role) && $In->role <= 4 && $In->role >= 1  )
        {

            $ConfigUserRole = config('app.UserRole');
            $UserRoles = [];
            foreach ($ConfigUserRole as $Index => $Role)
            {
                $IndexPlus = $Index+1;
                if ( $In->role < $IndexPlus )
                {
                    array_push($UserRoles,$Role);
                }
            }
            return response()->json(['code'=>200,'message'=>'success','allow user role'=>$UserRoles]);

        }else{
            return response()->json(['code'=>404,'message'=>'request ( auth role ) wrong ']);
        }


    }


    public function GetUserType()
    {
        $ConfigUserRole = config('app.RoleObj');
        return response()->json(['code'=>200,'message'=>'success','role'=>$ConfigUserRole]);
    }


    public function GetUser(Request $Req)
    {
        $AuthId = $Req->auth_id;
        $RoleId = $Req->role;
        $Limit = $Req->limit;

        if (!empty($AuthId) && !empty($RoleId) && $RoleId <= 4 && $RoleId >= 1 )
        {
            if (empty($Limit))
            {
                $UserDB = User::where('id','!=',$AuthId)->where('role','>=',$RoleId)->orderBy('id', 'DESC')->get();
            }else{
                $UserDB = User::where('id','!=',$AuthId)->where('role','>=',$RoleId)->orderBy('id', 'DESC')->take($Limit)->get();
            }
            return response()->json(['code'=>200,'message'=>'success','data'=>$UserDB]);

        }else{
            return response()->json(['code'=>404,'message'=>'parameter imcomplete ..']);
        }

    }

    public function GetLotteryTime()
    {
        return config('app.LotteryTime');
    }


    public function GetTwoDigit()
    {
        return $TwoDigitDB = Twodigit::all();

    }



}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function LoginAuth(Request $In)
    {

        $Username = $In->username;
        $Password = $In->password;

        if (!empty($Username) && !empty($Password))
        {
            $UserDB = User::where('email',$Username)->first();

            if (!empty($UserDB))
            {
                $DbPassword = $UserDB->password;
                $DecryptPassword = password_verify($Password,$DbPassword);

                if ($DecryptPassword){
                    return response()->json(['code'=>200,'data'=>$UserDB]);
                }else{
                    return response()->json(['code'=>401,'message'=>'password wrong']);
                }
            }else{
                return response()->json(['code'=>401,'message'=>'record not found']);
            }

        }else{
            return response()->json(['code'=> 204,'message'=>'fill all input']);
        }


    }

}

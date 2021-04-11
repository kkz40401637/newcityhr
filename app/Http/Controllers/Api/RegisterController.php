<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function CheckEmail($IncommingEmail)
    {
        $OutUsers = User::where('email',$IncommingEmail)->get();
        if (count($OutUsers) >= 1){
            return true;
        }else{
            return false;
        }
    }


    public function CharGenerate()
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        return $UpperCase.'3D'.$NewCase;
    }

    public function ApiRegister(Request  $Req)
    {

        $Name =  $Req->name;
        $Email =  $Req->email;
        $Password =  $Req->password;
        $Phone =  $Req->phone;
        $RegId =  $Req->reg_id;
        $Profile =  $Req->profile;
        $Role =  $Req->role;


        if ( !empty($Name) && !empty($Email) && !empty($Password) && !empty($Role) )
        {

            $UserDb = new User();

            $GetLastRRecord = User::latest('id')->first();
            $LastRcId = $GetLastRRecord->id;
            if ($LastRcId >= 1 )
            {
                $NewId = $LastRcId+1;
            }else{
                $NewId = 1;
            }

            $CharGenerate = $this->CharGenerate();
            $serial_id = $NewId.$CharGenerate;


            if ($this->CheckEmail($Email)){
                return response()->json(['code'=>422,'message'=>'Email already exit']);
            }else{

                $UserDb->name = $Name;
                $UserDb->email = $Email;
                $UserDb->phone = $Phone;
                $UserDb->password = Hash::make($Password);
                $UserDb->reg_id = $RegId;
                $UserDb->role = $Role;
                $UserDb->status = 1;
                $UserDb->serial_id = $serial_id;

                // Token Creating
                $rename = date("ymdhis");
                $shuffle = str_shuffle(md5($rename));
                $StuToken = $shuffle;
                // Token Creating

                $UserDb->token = $StuToken;

                if ($UserDb->save()){
                    return response()->json(['code'=>200,'message'=>'Success']);
                }else{
                    return response()->json(['code'=>500,'message'=>'Internal Server Error']);
                }
            }

        }else{
            return response()->json(['message'=>'fill all data field']);
        }


    }



}

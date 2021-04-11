<?php

namespace App\Http\Controllers\Api;

use App\Balancerequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class BalanceController extends Controller
{


    public function CharGenerate()
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        return $UpperCase.$NewCase;
    }


    public function CheckTextId($PaymentId,$TextId)
    {
        $SearchBalance = Balancerequest::where('payment_id',$PaymentId)->where('text_id',$TextId)->first();
        if (empty($SearchBalance))
        {
            return true;
        }else{
            return false;
        }

    }


    public function RequsetBalance( Request $In)
    {

        $BalanceRequest = new Balancerequest ();

        $CharGenerate = $this->CharGenerate();
        $Token = $CharGenerate.date('mYs');


        if ( !empty($In->user_id) && !empty($In->text_id) && !empty($In->payment_id)
            && !empty($In->phone) && $In->give_take == 0 || $In->give_take == 1 )
        {

//            if ($this->CheckTextId($In->payment_id,$In->text_id))
//            {

                if ($In->give_take == 0)
                {
                    $BalanceRequest->amount = 0;
                }else{

                    $UserFetch = User::find($In->user_id);
                    if($UserFetch->balance >= $In->amount )
                    {
                        $BalanceRequest->amount = $In->amount;
                    }else{
                        return response()->json(['code'=>302,'message'=>'Original balance low']);
                    }

                }

                $BalanceRequest->u_id = $In->user_id;
                $BalanceRequest->payment_id = $In->payment_id;
                $BalanceRequest->text_id = $In->text_id;
                $BalanceRequest->token = $Token;
                $BalanceRequest->status = 0;
                $BalanceRequest->give_take = $In->give_take;
                $BalanceRequest->phone = $In->phone;

                if ($BalanceRequest->save())
                {
                    return response()->json(['code'=>200,'message'=>'success']);
                }else{
                    return response()->json(['code'=>500,'message'=>'Internal Server Error']);
                }
//            }else{
//                return response()->json(['code'=>422,'message'=>'Failed !  Same payment service and text_id found']);
//            }

        }else{
           return response()->json(['code'=>404,'message'=>'request failed cuz empty input || fill all input ']);
        }

    }


    public function BalanceCheck($AuthId)
    {
        if ($AuthId > 0 && !empty($AuthId))
        {
            $GetLastRRecord = Balancerequest::latest('id')->first();
            $UserDb = User::find($AuthId);
            if ( empty($UserDb) )
            {
                return response()->json(['code'=>404,'message'=>'Record not found ...']);
            }else{
                $UserAmount = $UserDb->balance;
                return response()->json(['code'=>200,'message'=>'success','balance'=>$UserAmount,'unit'=>'MMK']);
            }
        }else{
            return response()->json(['code'=>404,'message'=>'User Id not found in this route ..']);
        }

    }



}

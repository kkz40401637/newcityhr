<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeSocial;
use Illuminate\Http\Request;

class EmployeeSocialController extends Controller
{


    public function SocialIndex()
    {
        $SocialDb = EmployeeSocial::where('Status',1)->get();
        return view('admin.employee.social.index',compact('SocialDb'));
    }


    public function SocialForm($Token)
    {

        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            $EmployeeDb = Employee::where('Status',1)->get();
            return view('admin.employee.social.create',compact('EmployeeDb','Token'));
        }else{
            return abort(404);
        }

    }

    public function SocialFormSave(Request $In)
    {
        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating
        $EmployeeID = $In->EmployeeID;
        $SocialDb = new EmployeeSocial();

        $FetchSocialDb = EmployeeSocial::where('EmployeeID',$EmployeeID)->first();

        if (!empty($EmployeeID) && empty($FetchSocialDb) )
        {
            $SocialDb->EmployeeID = $In->EmployeeID;
            $SocialDb->Facebook = $In->Facebook;
            $SocialDb->Twitter = $In->Twitter;
            $SocialDb->LinkedIn = $In->LinkedIn;
            $SocialDb->Skype = $In->Skype;
            $SocialDb->Token = $Token;
            $SocialDb->HideShow = 1;
            $SocialDb->Status = 1;
            if ($SocialDb->save())
            {
                return redirect()->route('SocialIndex')->with(['success'=>'Employee social data add successfully ..']);
            }else{
                return 'Database something wrong ...';
            }
        }else{
            return redirect()->back()->with(['error'=>'Employee social data already exit ..']);
        }

    }



}

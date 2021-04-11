<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Company;
class CompanyController extends Controller
{


    public function index()
    {
        $CompanyDb = Company::where('status',1)->where('RegId',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('admin.company.index',compact('CompanyDb'));
    }


    public function AddCompany()
    {
        return view('admin.company.create');
    }

    public function SaveToServer($In,$FileName='')
    {

        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);

        $Company = new Company();
        $Company->RegId = auth()->user()->id;
        $Company->Name = $In->Name;
        $Company->Phone = $In->Phone;
        $Company->FaxNumber = $In->FaxNumber;
        $Company->Website = $In->Website;
        $Company->TradingName = $In->TradingName;
        $Company->Email = $In->Email;
        $Company->RegNo = $In->RegNo;
        $Company->City = $In->City;
        $Company->State = $In->State;
        $Company->Postal = $In->Postal;
        $Company->CompanyAddress = $In->CompanyAddress;
        $Company->PersonName = $In->PersonName;
        $Company->Position = $In->Position;
        $Company->PersonAddress = $In->PersonAddress;
        $Company->Vision = $In->Vision;
        $Company->Mission = $In->Mission;
        $Company->Note = $In->Note;
        $Company->Token = $Token;
        $Company->HideShow = 1;
        $Company->Status = 1;
        if ($FileName != 'file_empty' )
        {
            $Company->Profile = $FileName;
        }

        if ($Company->save())
        {
            return true;
        }

    }


    public function SaveCompanyInfo(Request $Data)
    {

        $ImcommingImg = $Data->file('image');
        $StrLen =  strlen($ImcommingImg);
        if ($StrLen > 0)
        {
            $ExtArr = ['jpeg','png','jpg','gif'];
            $Ext = $ImcommingImg->getClientOriginalExtension();
            if (in_array($Ext,$ExtArr))
            {
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/img/company');
                $ImgFullName = $Rename.'.'.$Ext;
                $MovingFIle = $ImcommingImg->move($MovingPath, $ImgFullName);
                $Saving = $this->SaveToServer($Data,$ImgFullName);
                if ($Saving)
                {
                    return  response()->json(['code'=>200,'message'=>"Company successfully add to the database .."]);
                }

            }else{
                return  response()->json(['code'=>403,'message'=>" We only allowed this extension  jpeg , png , jpg , gif "]);
            }
        }else{
            $Saving = $this->SaveToServer($Data,'file_empty');
            if ($Saving)
            {
                return  response()->json(['code'=>200,'message'=>"Company add to the database .."]);
            }
        }

    }


    public function EditCompanyInfo($token)
    {
        $Company = Company::where('Token', $token)->first();
        if (empty($Company)) {
            return view('admin.errors.404');
        } else {
            return view('admin.company.edit', compact('Company'));
        }
    }

    function UpdateCompanySave($In,$Filename='company.jpg')
    {
        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);
        $Company = Company::where('Token',$In->CompanyToken)->first();
        if($Filename != 'file_empty')
        {
            $Company->Profile = $Filename;
        }
        $Company->Name = $In->Name;
        $Company->Phone = $In->Phone;
        $Company->FaxNumber = $In->FaxNumber;
        $Company->Website = $In->Website;
        $Company->TradingName = $In->TradingName;
        $Company->Email = $In->Email;
        $Company->RegNo = $In->RegNo;
        $Company->City = $In->City;
        $Company->State = $In->State;
        $Company->Postal = $In->Postal;
        $Company->CompanyAddress = $In->CompanyAddress;
        $Company->PersonName = $In->PersonName;
        $Company->Position = $In->Position;
        $Company->PersonAddress = $In->PersonAddress;
        $Company->Vision = $In->Vision;
        $Company->Mission = $In->Mission;
        $Company->Note = $In->Note;
        $Company->UpdId = auth()->user()->id;
        if ($Company->save())
        {
            return true;
        }
    }
    public function UpdateCompanyInfo(Request $In)
    {
        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);
        $ImcommingImg = $In->file('Profile');
        $StrLen = strlen($ImcommingImg);
        if ($StrLen > 0) {
            $ExtArr = ['jpeg', 'png', 'jpg', 'gif'];
            $Ext = $ImcommingImg->getClientOriginalExtension();
            if (in_array($Ext, $ExtArr)) {
                $Company = Company::where('Token', $In->CompanyToken)->first();
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/img/company');
                $ImgFullName = $Rename.'.'.$Ext;
//                if (!empty($Company->Profile)) {
//                    unlink(public_path('admin-assets/img/company/'.$Company->Profile));
//                }
                $MovingFIle = $ImcommingImg->move($MovingPath, $ImgFullName);
                $Saving = $this->UpdateCompanySave($In, $ImgFullName);
                if ($Saving) {
                    return response()->json(['code' => 200, 'message' => "Company update successfully .."]);
                }
            } else {
                return response()->json(['code' => 403, 'message' => " We only allowed this extension  jpeg , png , jpg , gif "]);
            }
        } else {
            $Saving = $this->UpdateCompanySave($In, 'file_empty');
            if ($Saving) {
                return response()->json(['code' => 200, 'message' => "Company update successfully .."]);
            }
        }
    }


}

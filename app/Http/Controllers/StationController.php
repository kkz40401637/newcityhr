<?php

namespace App\Http\Controllers;
use App\BusinessUnit;
use App\Company;
use App\Station;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;


class StationController extends Controller
{

    public function StationList()
    {
        $stations = Station::where('HideShow',1)->orderBy('id', 'DESC')->get();
        return view('admin.station.index',compact('stations'));
    }


    public function AddStation(Request $request)
    {

        $BusinessUnitDb = BusinessUnit::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.station.create',compact('BusinessUnitDb'));

    }


    public function SaveToServer($In,$FileName='')
    {

        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);
        // return $Token;
        $stationDb = new Station();
        $stationDb->BuID = $In->BuID;
        $stationDb->StationName = $In->StationName;
        $stationDb->CurrencyUse = $In->CurrencyUse;
        $stationDb->CurrencySymbol = $In->CurrencySymbol;
        $stationDb->Address = $In->Address;
        $stationDb->PhoneNumber = $In->PhoneNumber;
        $stationDb->FaxNumber = $In->FaxNumber;
        $stationDb->EmailAddress = $In->EmailAddress;
        $stationDb->WebSite = $In->WebSite;
        $stationDb->AdditionalNote = $In->AdditionalNote;
        $stationDb->Status = 1;
        $stationDb->RegId = auth()->user()->id;
        $stationDb->HideShow = 1;
        $stationDb->Token = $Token;

        if ($FileName != 'file_empty' )
        {
            $stationDb->images = $FileName;
        }
        if ($stationDb->save())
        {
            return true;
        }
    }


    public function SaveStationInfo(Request $Data)
    {
//         return $Data;
        $ImcommingImg = $Data->file('images');
        $StrLen =  strlen($ImcommingImg);
        if ($StrLen > 0)
        {
            $ExtArr = ['jpeg','png','jpg','gif'];
            $Ext = $ImcommingImg->getClientOriginalExtension();
            if (in_array($Ext,$ExtArr))
            {
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/img/station');
                $ImgFullName = $Rename.'.'.$Ext;
                $MovingFIle = $ImcommingImg->move($MovingPath, $ImgFullName);
                $Saving = $this->SaveToServer($Data,$ImgFullName);
                if ($Saving)
                {
                    return  response()->json(['code'=>200,'message'=>"Station successfully add to the database .."]);
                }
            }else{
                return  response()->json(['code'=>403,'message'=>" We only allowed this extension  jpeg , png , jpg , gif "]);
            }
        }else{
            $Saving = $this->SaveToServer($Data,'file_empty');
            if ($Saving)
            {
                return  response()->json(['code'=>200,'message'=>"Station add to the database .."]);
            }
        }
    }


    function EditStationInfo($token)
    {
        $Station = Station::where('token', $token)->first();
        $BusinessUnitDb = BusinessUnit::where('status', 1)->orderBy('id', 'DESC')->get();
        if (empty($Station)) {
            return view('admin.errors.404');
        } else {
            return view('admin.station.edit', compact('Station', 'BusinessUnitDb'));
        }
    }

    function UpdateStaionSave($In,$Filename='')
    {


        $StationFind = Station::where('Token',$In->StationToken)->first();
        if($Filename != 'file_empty')
        {
            $StationFind->images = $Filename;
        }
        $StationFind->BuID = $In->BuID;
        $StationFind->StationName = $In->StationName;
        $StationFind->PhoneNumber = $In->PhoneNumber;
        $StationFind->CurrencyUse = $In->CurrencyUse;
        $StationFind->CurrencySymbol = $In->CurrencySymbol;
        $StationFind->FaxNumber = $In->FaxNumber;
        $StationFind->EmailAddress = $In->EmailAddress;
        $StationFind->WebSite = $In->WebSite;
        $StationFind->AdditionalNote = $In->AdditionalNote;
        $StationFind->UpdId = auth()->user()->id;
        if ($StationFind->save())
        {
            return true;
        }
    }


    function UpdateStationInfo(Request $In)
    {

        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);

        $ImcommingImg = $In->file('images');
        $StrLen =  strlen($ImcommingImg);
        if ($StrLen > 0)
        {
            $ExtArr = ['jpeg','png','jpg','gif'];
            $Ext = $ImcommingImg->getClientOriginalExtension();
            if (in_array($Ext,$ExtArr))
            {
                $FindDb = Station::where('token',$In->StationToken)->first();
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/img/station');
                $ImgFullName = $Rename.'.'.$Ext;
                if (!empty($FindDb->images))
                {
                    unlink(public_path('admin-assets/img/station/'.$FindDb->images));
                }
                $MovingFIle = $ImcommingImg->move($MovingPath, $ImgFullName);
                $Saving = $this->UpdateStaionSave($In,$ImgFullName);
                if ($Saving)
                {
                    return  response()->json(['code'=>200,'message'=>"Station update successfully .."]);
                }
            }else{
                return  response()->json(['code'=>403,'message'=>" We only allowed this extension  jpeg , png , jpg , gif "]);
            }
        }else{
             $Saving = $this->UpdateStaionSave($In,'file_empty');
            if ($Saving )
            {
                return  response()->json(['code'=>200,'message'=>"Station update successfully .."]);
            }
        }

    }



    public function StationStatusChange(Request  $In)
    {
        $FindingStation = Station::find($In->StationId);
        $FindingStation->status = 0;

        if ($FindingStation->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }


    public function SearchStationInOnchange(Request $In)
    {
        $StationDb = Station::where('BuID',$In->CompanyId)->get();

        return response()->json(['code'=>200,'station'=>$StationDb]);

    }


}

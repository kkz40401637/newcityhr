<?php

namespace App\Http\Controllers;

use App\BusinessUnit;
use App\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BusinessUnitController extends Controller
{


    public function index()
    {
        $BusinessUnit = BusinessUnit::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.business_unit.index',compact('BusinessUnit'));
    }


    public function AddBusinessUnit()
    {
        return view('admin.business_unit.create');
    }

    public function SaveToServer($In,$FileName='')
    {

        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);

        $BusinessUnitDb = new BusinessUnit();
        $BusinessUnitDb->Name = $In->Name;
        $BusinessUnitDb->Description = $In->Description;
        $BusinessUnitDb->Token = $Token;
        $BusinessUnitDb->HideShow = 1;
        $BusinessUnitDb->Status = 1;
        $BusinessUnitDb->RegId = auth()->user()->id;
        if ($FileName != 'file_empty' )
        {
            $BusinessUnitDb->Profile = $FileName;
        }

        if ($BusinessUnitDb->save())
        {
            return true;
        }

    }


    public function SaveBusinessUnitInfo(Request $Data)
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
                $MovingPath = public_path('admin-assets/img/bu/');
                $ImgFullName = $Rename.'.'.$Ext;
                $MovingFIle = $ImcommingImg->move($MovingPath, $ImgFullName);
                $Saving = $this->SaveToServer($Data,$ImgFullName);
                if ($Saving)
                {
                    return  response()->json(['code'=>200,'message'=>"Business units successfully add to the database .."]);
                }

            }else{
                return  response()->json(['code'=>403,'message'=>" We only allowed this extension  jpeg , png , jpg , gif "]);
            }
        }else{
            $Saving = $this->SaveToServer($Data,'file_empty');
            if ($Saving)
            {
                return  response()->json(['code'=>200,'message'=>"Business units add to the database .."]);
            }
        }

    }


}

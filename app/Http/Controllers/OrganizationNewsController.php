<?php

namespace App\Http\Controllers;

use App\Department;
use App\OfficeOrder;
use App\OrganizationNews;
use App\Station;
use Illuminate\Http\Request;

class OrganizationNewsController extends Controller
{


    public function OrganizationNewsList()
    {
        $OrganizationNews = OrganizationNews::orderBy('id','DESC')->get();
        return view('admin.organization_news.index',compact('OrganizationNews'));
    }


    public function AddOrganizationNews()
    {

        $StationDb = Station::where('HideShow',1)->get();
        $DepartmentDb = Department::where('HideShow',1)->get();
        return view('admin.organization_news.create',compact('StationDb','DepartmentDb'));

    }


    public function OrganizationNews(Request $In)
    {

        $ErrorChecking = [];

        foreach ($In->StationID as $Index => $Station)
        {
            $OrganizationNewsDb = new OrganizationNews();
            // Token Creating
            $rename = date("ymdhis");
            $Token = str_shuffle(md5($rename));
            // Token Creating

            $OrganizationNewsDb->Title = $In->Title;
            $OrganizationNewsDb->Description = $In->NewsDescription;
            $OrganizationNewsDb->BranchId = $Station;
            $OrganizationNewsDb->Token = $Token;
            $OrganizationNewsDb->RegId = auth()->user()->id;
            $OrganizationNewsDb->HideShow = 1;
            $OrganizationNewsDb->Status = 1;

            $Condition = $OrganizationNewsDb->save();
            array_push($ErrorChecking,$Condition);

        }

        if (in_array(false,$ErrorChecking) )
        {
            return response()->json(['code'=>500,'message'=>"Internal server error ..."]);
        }else{
            return response()->json(['code'=>200,'message'=>"Post successfully uploaded ..."]);
        }
    }


}

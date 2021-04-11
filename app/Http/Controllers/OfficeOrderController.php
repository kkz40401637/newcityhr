<?php

namespace App\Http\Controllers;

use App\OfficeOrder;
use App\OrganizationNews;
use App\Station;
use App\User;
use Illuminate\Http\Request;
use function Composer\Autoload\includeFile;

class OfficeOrderController extends Controller
{
    public function OfficeOrderList()
    {
        $OfficeOrderDb = OfficeOrder::where('HideShow',1)->get();
        return view('admin.office_orders.index',compact('OfficeOrderDb'));
    }

    public function AddStationNews()
    {
//        $StationDb = Station::where('HideShow',1)->get();
        $UserDb = User::where('status',1)->where('role','>=',1)->where('id','!=',auth()->user()->id)->get();
        return view('admin.office_orders.create',compact('UserDb'));
    }

    public function OfficeOrder(Request $In)
    {

        $ErrorChecking = [];

        foreach ($In->StationID as $Index => $Station)
        {
            $OfficeOrderDb = new OfficeOrder();
            // Token Creating
            $rename = date("ymdhis");
            $Token = str_shuffle(md5($rename));
            // Token Creating

            $OfficeOrderDb->u_id = $Station;
            $OfficeOrderDb->Title = $In->Title;
            $OfficeOrderDb->Description = $In->NewsDescription;
            $OfficeOrderDb->Token = $Token;
            $OfficeOrderDb->HideShow = 1;
            $OfficeOrderDb->RegId = auth()->user()->id;
            $OfficeOrderDb->Status = 1;

            $Condition = $OfficeOrderDb->save();

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

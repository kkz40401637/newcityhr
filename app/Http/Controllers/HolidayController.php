<?php

namespace App\Http\Controllers;

use App\Holiday;
use App\Station;
use Illuminate\Http\Request;
use TheSeer\Tokenizer\Token;

class HolidayController extends Controller
{


    public function TranslateStationIdToName($StationDecoder)
    {
        $StationDb = Station::all();

        foreach ($StationDecoder as $I => $Station)
        {
            foreach ($StationDb as $i => $StationInfo)
            {
                if($StationInfo->id == $Station)
                {
                    $Station = $StationInfo->StationName;
                    $StationDecoder[$I] = $StationInfo->StationName;
                }
            }
        }
        return $StationDecoder;
    }


    public function GetStationInfo()
    {
        $HolidaysDb = Holiday::where('HideShow',1)->get();
        foreach ($HolidaysDb as $Index => $Holiday)
        {
            $StationDecoder = json_decode($Holiday->StationID);
            $ConvertStationName = $this->TranslateStationIdToName($StationDecoder);
            $Holiday->StationID = $ConvertStationName;
        }
        return $HolidaysDb;
    }

    public function HolidayList()
    {
        $HolidaysDb = $this->GetStationInfo();
        return view('admin.holidays.index',compact('HolidaysDb'));
    }

    public function AddHoliday()
    {
        $StationDb = Station::where('HideShow',1)->get();
        return view('admin.holidays.create',compact('StationDb'));
    }


    public function SaveHoliday(Request $In)
    {
        $validated = $In->validate([
            'Title' => 'required',
            'StartDate' => 'required',
            'EndDate' => 'required',
        ]);

        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating

        if ($In->has('StationID')) {
            $HolidaysDb = new Holiday();
            $HolidaysDb->Title = $In->Title;
            $HolidaysDb->StationID = json_encode($In->StationID);
            $HolidaysDb->StartDate = $In->StartDate;
            $HolidaysDb->EndDate = $In->EndDate;
            $HolidaysDb->NewsDescription = $In->NewsDescription;
            $HolidaysDb->Note = $In->Note;
            $HolidaysDb->Token = $Token;
            $HolidaysDb->HideShow = 1;
            $HolidaysDb->Status = 1;
//            return $HolidaysDb;
            $HolidaysDb->save();
            return redirect()->route('HolidayList')->with('message','Add Holidays & Successfully ');
        }
        return redirect()->back()->with('error', 'Place Check Your Branch');
    }


    public function EditHoliday($Token)
    {
        $HolidaysDb = Holiday::where('Token', $Token)->first();
        $StationDb = Station::where('HideShow',1)->get();

        if (empty($HolidaysDb) )
        {
            return view('admin.errors.404');
        }else{
            $StationDecoder = json_decode($HolidaysDb->StationID);
            $ConvertStationName = $this->TranslateStationIdToName($StationDecoder);
            $HolidaysDb->StationID = $ConvertStationName;
            return view('admin.holidays.edit',compact('HolidaysDb','StationDb'));
        }
    }


    public function UpdateHoliday(Request $In)
    {
        $validated = $In->validate([
            'Title' => 'required',
            'StartDate' => 'required',
            'EndDate' => 'required',
        ]);
        $HolidaysDb = Holiday::where('Token', $In->Token)->first();
        $HolidaysDb->Title = $In->Title;
        if(!empty( $In->StationID)){
            $HolidaysDb->StationID = json_encode($In->StationID);
        }
        $HolidaysDb->StartDate = $In->StartDate;
        $HolidaysDb->EndDate = $In->EndDate;
        $HolidaysDb->NewsDescription = $In->NewsDescription;
        $HolidaysDb->Note = $In->Note;
        $HolidaysDb->UpdId = auth()->user()->id;
        $HolidaysDb->save();
        return redirect()->route('HolidayList')->with('message', 'Update Holidays & Successfully ');
    }

}

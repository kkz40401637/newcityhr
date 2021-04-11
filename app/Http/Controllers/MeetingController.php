<?php

namespace App\Http\Controllers;

use App\Company;
use App\Department;
use App\Meeting;
use App\Notification;
use App\User;
use Illuminate\Http\Request;

class MeetingController extends Controller
{

    public function TranslateStationIdToName($DepartmentDecoder)
    {
        $DepartmentDb = Department::all();
        foreach ($DepartmentDecoder as $I => $Department)
        {
            foreach ($DepartmentDb as $i => $DepartmentInfo)
            {
                if($DepartmentInfo->id == $Department)
                {
                    $Department = $DepartmentInfo->Name;
                    $DepartmentDecoder[$I] = $DepartmentInfo->Name;
                }
            }
        }
        return $DepartmentDecoder;
    }


    public function GetStationInfo()
    {
//        $MeetingDb = Meeting::where('id','DESC')->oldest()->limit(50)->get();
        $MeetingDb = Meeting::all();
        foreach ($MeetingDb as $Index => $Meeting)
        {
            $DepartmentDecoder = json_decode($Meeting->DepartmentId);
            if (!empty($DepartmentDecoder)){
                $ConvertDepartmentName = $this->TranslateStationIdToName($DepartmentDecoder);
                $Meeting->DepartmentId = $ConvertDepartmentName;
            }
        }
        return $MeetingDb;
    }


    public function Index()
    {
        $MeetingDb = $this->GetStationInfo();
        return view('admin.meeting.index',compact('MeetingDb'));
    }


    public function CreateMeetingForm()
    {
        $DepartmentDb = Department::where('HideShow',1)->orderBy('id', 'DESC')->get();
        $UserDb = User::where('role','>=',1)->where('id','!=',auth()->user()->id)->where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.meeting.create',compact('DepartmentDb','UserDb'));
    }


    public function SaveMeeting($In)
    {
        $MeetingDb = new Meeting();
        $MeetingDb->Title = $In->Title;
        $MeetingDb->Location = $In->Location;
        $MeetingDb->StartTimestemp = $In->StartTimestemp;
        $MeetingDb->EndTimestemp = $In->EndTimestemp;
        $MeetingDb->Participant = $In->MeetingChaired;
        $MeetingDb->Notes = $In->MeetingDescription;
        $MeetingDb->DepartmentID = !empty($In->DepartmentID)?json_encode($In->DepartmentID):'';
        $MeetingDb->Types = $In->Types;
        $MeetingDb->RegId = auth()->user()->id;
        if($MeetingDb->save())
        {
            return true;
        }else{
            return false;
        }
    }


    public function AddMeetAndCreateNoti($Types,$TypeArr,$In)
    {
        $AllUserId = [];
        $CreateMeeting = $this->SaveMeeting($In);
        if($CreateMeeting)
        {

            foreach ($TypeArr as $Index => $TypeId )
            {
                if ($Types == 'regular')
                {
                    $UserDb = User::where('department_id', $TypeId)->get();
                    foreach ($UserDb as $IndexNo => $User)
                    {
                        array_push($AllUserId, $User->id);
                    }
                }else{
                    $UserDb = User::find($TypeId);
                    array_push($AllUserId, $UserDb->id);
                }

            }

            $Reached = count($TypeArr);
            $MeetingDb = Meeting::latest('id')->first();
            $MeetingDb->Reached = $Types == 'custom'?$Reached:count($AllUserId);
            $MeetingDb->save();

            foreach ($AllUserId as $i => $UserId)
            {

                //Token Creating
                $rename = date("ymdhis");
                $Token = str_shuffle(md5($rename));
                // Token Creating

                $NotiDb = new Notification();
                $NotiDb->MId = $MeetingDb->id;
                $NotiDb->Type = $Types ;
                $NotiDb->UId = $UserId;
                $NotiDb->SeenUnseen = 'Unseen';
                $NotiDb->Status = 1;
                $NotiDb->Token = $Token;
                $NotiDb->save();

            }

//          return $AllUserId;
            return true;

        }

    }


    public function CreateMeeting( Request $In)
    {
        $Types = $In->Types;
        $Types == 'regular'?$TypeArr=$In->DepartmentID:$TypeArr=$In->CustomUser;
        if (!empty($TypeArr))
        {
            $AddMeetAndNoti =  $this->AddMeetAndCreateNoti($Types,$TypeArr,$In);
            if($AddMeetAndNoti)
            {
                return redirect()->back()->with('success',''.$Types == 'regular'?' Meeting successfully lunch to Department ':' Meeting successfully lunch to User');
            }
        }else{
            return redirect()->back()->with('error',$Types == 'regular'?'Please choice Department ':'Please choice User ');
        }
    }

}

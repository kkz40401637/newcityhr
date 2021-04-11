<?php

namespace App\Http\Controllers;

use App\Department;
use App\Job;
use App\User;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function JobList()
    {
        $JobDb = Job::where('HideShow',1)->orderBy('id', 'DESC')->get();
        return view('admin.job.index',compact('JobDb'));
    }

    public function RequestJobForm()
    {
        $UserDb = User::where('role','>=',1)->where('status',1)->get();
        $DepartmentDb = Department::where('HideShow',1)->orderBy('id', 'DESC')->get();
        return view('admin.job.create',compact('DepartmentDb','UserDb'));
    }

    public function RequestJob(Request $In)
    {

        $In->validate([
            'Title' => 'required',
            'Position' => 'required',
            'ApprovalId' => 'required'
        ]);

        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating

        $JobDb = new Job();

        $JobDb->ApprovalId = $In->ApprovalId;
        $JobDb->Title  = $In->Title;
        $JobDb->Position  = $In->Position;
        $JobDb->Location  = $In->Location;
        $JobDb->RangeFrom  = $In->RangeFrom;
        $JobDb->RangeTo  = $In->RangeTo;
        $JobDb->DueDate  = $In->DueDate;
        $JobDb->EmployeeType  = $In->EmployeeType;
        $JobDb->Experience = $In->Experience;
        $JobDb->NumberOfEmplyoee  = $In->NumberOfEmplyoee;
        $JobDb->qualification  = json_encode($In->qualification);
        $JobDb->Gender  = json_encode($In->Gender);
        $JobDb->DepartmentID = $In->DepartmentID;
//        $JobDb->Age  = $In->Age;
        $JobDb->DrivingLicense  = $In->DrivingLicense;
        $JobDb->Description  = $In->Description;
        $JobDb->HideShow = 1;
        $JobDb->Token = $Token;
        $JobDb->Status = 'Pending';
        $JobDb->RegId = auth()->user()->id;

        if($JobDb->save())
        {
            return redirect()->route('JobList');
        }else{
            return 'Database error .....';
        }


    }


    public function JobRequestChangeStatus(Request $In)
    {
        $JobReqDb = Job::find($In->JobId);

        $JobReqDb->UpdId = $In->ApprovalId;
        $JobReqDb->Status = $In->ChangeStatus;
        if($JobReqDb->save())
        {
            return response()->json(['code'=>200,'message'=>'You have been change this job request ..']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }


    }


    public function JobRequestList()
    {
        $JobDb = Job::where('HideShow',1)->where('RegId',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('admin.job.list',compact('JobDb'));
    }


    public function EditJobPostForm($Token)
    {
        $DepartmentDb = Department::where('HideShow',1)->orderBy('id', 'DESC')->get();
        $UserDb = User::where('role','>=',1)->where('status',1)->get();
        $FetchOne = Job::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            return view('admin.job.edit',compact('FetchOne','DepartmentDb','UserDb'));
        }else{
            return abort(404);
        }
    }


    public function JobRequestEdit(Request $In)
    {
        $FindJobPost = Job::find($In->JobReqId);

        $FindJobPost->ApprovalId = $In->ApprovalId;
        $FindJobPost->Title  = $In->Title;
        $FindJobPost->Position  = $In->Position;
        $FindJobPost->Location  = $In->Location;
        $FindJobPost->RangeFrom  = $In->RangeFrom;
        $FindJobPost->RangeTo  = $In->RangeTo;
        $FindJobPost->DueDate  = $In->DueDate;
        $FindJobPost->EmployeeType  = $In->EmployeeType;
        $FindJobPost->Experience = $In->Experience;
        $FindJobPost->NumberOfEmplyoee  = $In->NumberOfEmplyoee;
        $FindJobPost->qualification  = json_encode($In->qualification);
        $FindJobPost->Gender  = json_encode($In->Gender);
        $FindJobPost->DepartmentID = $In->DepartmentID;
        $FindJobPost->DrivingLicense  = $In->DrivingLicense;
        $FindJobPost->Description  = $In->Description;
        $FindJobPost->UpdId = auth()->user()->id;

        if($FindJobPost->save())
        {
            return redirect()->route('JobRequestList')->with(['success'=>'Updating success ....']);
        }else{
            return 'Database error .....';
        }

    }


}

<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Department;
use App\Job;
use App\Station;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CandidateController extends Controller
{



    public function CandidateList()
    {
        $CandidateDb = Candidate::where('HideShow',1)->get();
        return view('admin.candidate.index',compact('CandidateDb'));

    }



    public function AddCandidatePost($Token)
    {
        $JobRequestDb = Job::where('Token',$Token)->first();
        if (!empty($JobRequestDb))
        {
            $JobReqId = $JobRequestDb->id;
            $DepartmentDb = Department::where('HideShow',1)->get();
            return view('admin.candidate.create',compact('JobReqId','DepartmentDb','JobRequestDb'));
        }else{
            return view('admin.errors.404');
        }
    }



    public function SaveToServer($In,$FileName='')
    {

        $JobDb = Job::find($In->JobReqId);
        $JobDb->status = 'Done';
        if($JobDb->save())
        {
            $current = Carbon::now()->format(' Y:m:d:H:s');
            $Rename = md5($current);
            $Token = str_shuffle($Rename);
            // return $Token;
            $CandidateDb = new Candidate();
            $CandidateDb->JobReqId = $In->JobReqId;
            $CandidateDb->DepartmentID = $In->DepartmentID;
            $CandidateDb->Name = $In->Name;
            $CandidateDb->Position = $In->Position;
            $CandidateDb->NrcNumber = $In->NrcNumber;
            $CandidateDb->JobType = $In->JobType;
            $CandidateDb->ExpectedSalary = $In->ExpectedSalary;
            $CandidateDb->DateOfplace = $In->DateOfplace;
            $CandidateDb->MaritalStatus = $In->MaritalStatus;
            $CandidateDb->Region = $In->Region;
            $CandidateDb->Experience = $In->Experience;
            $CandidateDb->Reason = $In->Reason;
            $CandidateDb->Religion = $In->Religion;
            $CandidateDb->License = $In->License;
            $CandidateDb->Gender = $In->Gender;
            $CandidateDb->Description = $In->Description;
            $CandidateDb->Token = $Token;
            $CandidateDb->HideShow = 1;
            $CandidateDb->Status = 1;
            $CandidateDb->RegId = auth()->user()->id;

            if ($FileName != 'file_empty' )
            {
                $CandidateDb->CvFormUpload = $FileName;
            }
            if ($CandidateDb->save())
            {
                return true;
            }

        }else{
            return false;
        }

    }



    public function SaveCandidatePost(Request $In)
    {
//        return $In;

        $CvFormUpload = $In->file('CvFormUpload');

        if (strlen($CvFormUpload) != 0)
        {
            $ExtArr = ['pdf','cvs','docx','xlsx','xlsm'];
            $Ext = $CvFormUpload->getClientOriginalExtension();
            if (in_array($Ext,$ExtArr))
            {
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/user_cv');
                $CvFileFullName = $Rename.'.'.$Ext;
                $MovingFIle = $CvFormUpload->move($MovingPath, $CvFileFullName);
                $Saving = $this->SaveToServer($In,$CvFileFullName);
                if ($Saving)
                {
                    return  redirect()->back()->with(['success'=>"Candidate data successfully add to the database .."]);
                }
            }else{
                return  redirect()->back()->with(['error'=>" We only allowed this extension  pdf , docx , cvs , xlsx ..."]);
            }
        }else{
            $Saving = $this->SaveToServer($In,'file_empty');
            if ($Saving)
            {
                return  redirect()->back()->with(['success'=>"Candidate data successfully add to the database .."]);
            }
        }

    }



    public function CandidateDetails($Token)
    {
        $JobRequestDb = Job::where('Token',$Token)->first();
        if (!empty($JobRequestDb))
        {
            $JobReqId = $JobRequestDb->id;
            $CandidateDb = Candidate::where('JobReqId',$JobReqId)->get();
            if (count($CandidateDb) >= 1)
            {
                return view('admin.candidate.history',compact('CandidateDb','JobRequestDb'));
            }else{
                return redirect()->back()->with(['error'=>'There is no user upload ( CV ) ']);
            }
        }else{
            return view('admin.errors.404');
        }
    }



}

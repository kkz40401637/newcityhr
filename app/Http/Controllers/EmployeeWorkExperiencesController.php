<?php

namespace App\Http\Controllers;
use App\EmployeeWorkExperiences;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeWorkExperiencesController extends Controller
{
    public function EmployeeWorkExperiencesList()
    {
        $EmployeeWorkDb = EmployeeWorkExperiences::where('HideShow',1)->get();
        return view('admin.employee.work.index',compact('EmployeeWorkDb'));
    }

    public function EmployeeWorkExperiencesCreateForm($Token)
    {

        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            $EmployeeID = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
            return view('admin.employee.work.create',compact('EmployeeID','Token'));
        }else{
            return abort(404);
        }


    }

    public function EmployeeWorkExperiencesSave(Request $In)
    {
        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating

        $EmployeeWorkDb = new EmployeeWorkExperiences();
        $EmployeeWorkDb->RegId = auth()->user()->id;
        $EmployeeWorkDb->EmployeeID = $In->EmployeeID;
        $EmployeeWorkDb->OrganizationName = $In->OrganizationName;
        $EmployeeWorkDb->JobDesignation = $In->JobDesignation;
        $EmployeeWorkDb->JobField = $In->JobField;
        $EmployeeWorkDb->JobStartDate = $In->JobStartDate;
        $EmployeeWorkDb->JobEndDate = $In->JobEndDate;
        $EmployeeWorkDb->StartingSalary = $In->StartingSalary;
        $EmployeeWorkDb->EndingSalary = $In->EndingSalary;
        $EmployeeWorkDb->TypeOfBusiness = $In->TypeOfBusiness;
        $EmployeeWorkDb->OtherBenefit = $In->OtherBenefit;
        $EmployeeWorkDb->ReasonForLeaving = $In->ReasonForLeaving;
        $EmployeeWorkDb->Period = $In->Period;
        $EmployeeWorkDb->JobDescription = $In->JobDescription;
        $EmployeeWorkDb->Token = $Token;
        $EmployeeWorkDb->HideShow = 1;
        $EmployeeWorkDb->Status = 1;

        if($EmployeeWorkDb->save())
        {
            return  redirect()->route('EmployeeWorkExperiencesList')->with(['success'=>"EmployeeWorkExperience data successfully add to the database .."]);
        }else{
            return 'Something wrong';
        }
    }

    public function EditEmployeeWorkInfo($Token)
    {
        $EmployeeWorkDb = EmployeeWorkExperiences::where('Token', $Token)->first();
        if (empty($EmployeeWorkDb)) {
            return view('admin.errors.404');
        } else {
            return view('admin.employee.work.edit', compact('EmployeeWorkDb'));
        }
    }

    public function UpdateEmployeeWork(Request $In)
    {

        $EmployeeWorkDb = EmployeeWorkExperiences::where('Token',$In->EmployeeWorkToken)->first();
        $EmployeeWorkDb->EmployeeID = $In->EmployeeID;
        $EmployeeWorkDb->OrganizationName = $In->OrganizationName;
        $EmployeeWorkDb->JobDesignation = $In->JobDesignation;
        $EmployeeWorkDb->JobField = $In->JobField;
        $EmployeeWorkDb->JobStartDate = $In->JobStartDate;
        $EmployeeWorkDb->JobEndDate = $In->JobEndDate;
        $EmployeeWorkDb->StartingSalary = $In->StartingSalary;
        $EmployeeWorkDb->EndingSalary = $In->EndingSalary;
        $EmployeeWorkDb->TypeOfBusiness = $In->TypeOfBusiness;
        $EmployeeWorkDb->OtherBenefit = $In->OtherBenefit;
        $EmployeeWorkDb->ReasonForLeaving = $In->ReasonForLeaving;
        $EmployeeWorkDb->Period = $In->Period;
        $EmployeeWorkDb->JobDescription = $In->JobDescription;
        $EmployeeWorkDb->UpdId = auth()->user()->id;
        $EmployeeWorkDb->save();

        return  redirect()->route('EmployeeWorkExperiencesList')->with(['success'=>"EmployeeWorkExperience Updated successfully .."]);
    }

}

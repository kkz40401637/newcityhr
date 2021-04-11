<?php

namespace App\Http\Controllers;

use App\Department;
use App\Station;
use App\User;
use App\Employee;
use App\EmployeeContract;
use Illuminate\Http\Request;

class EmployeeContractController extends Controller
{
    public function EmployeeContractList()
    {
        $EmployeeContractDb =  EmployeeContract::where('Status',1)->orderBy('id', 'DESC')->get();
        return view('admin.employee.contract.index',compact('EmployeeContractDb'));
    }

    public function EmployeeContractCreateForm($Token)
    {

        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {

            $UserDb = User::where('role','>=',1)->where('status',1)->get();
            $DepartmentDb = Department::where('HideShow',1)->orderBy('id', 'DESC')->get();
            $Stations = Station::where('Status',1)->orderBy('id', 'DESC')->get();
            $EmployeeID = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
            return view('admin.employee.contract.create',compact('UserDb','DepartmentDb','Stations','EmployeeID','Token'));

        }else{
            return abort(404);
        }


    }

    public function EmployeeContractSave(Request $In)
    {
        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating

        $EmployeeContractDb = new EmployeeContract();
        $EmployeeContractDb->RegId = auth()->user()->id;
        $EmployeeContractDb->ContractID = $In->ContractID;
        $EmployeeContractDb->EmployeeName = $In->EmployeeName;
        $EmployeeContractDb->EmployeeID = $In->EmployeeID;
        $EmployeeContractDb->ContractType = $In->ContractType;
        $EmployeeContractDb->ContractTitle = $In->ContractTitle;
        $EmployeeContractDb->EmployeeDesignation = $In->EmployeeDesignation;
        $EmployeeContractDb->ContractStartDate = $In->ContractStartDate;
        $EmployeeContractDb->ContractEndDate = $In->ContractEndDate;
        $EmployeeContractDb->EmployeeType = $In->EmployeeType;
        $EmployeeContractDb->EmployeeCategory = $In->EmployeeCategory;
        $EmployeeContractDb->ApprovedDate = $In->ApprovedDate;
        $EmployeeContractDb->Department = $In->Department;
        $EmployeeContractDb->EmployeeGrade = $In->EmployeeGrade;
        $EmployeeContractDb->Branch = $In->Branch;
        $EmployeeContractDb->CreatedBy = $In->CreatedBy;
        $EmployeeContractDb->CreatedDate = $In->CreatedDate;
        $EmployeeContractDb->ApprovedPerson = $In->ApprovedPerson;
        $EmployeeContractDb->AdditionalNote = $In->AdditionalNote;
        $EmployeeContractDb->ContractDescription = $In->ContractDescription;
        $EmployeeContractDb->Token = $Token;
        $EmployeeContractDb->HideShow = 1;
        $EmployeeContractDb->Status = 1;

        if($EmployeeContractDb->save())
        {
            return  redirect()->route('EmployeeContractList')->with(['success'=>"EmployeeContract data successfully add to the database .."]);
        }else{
            return 'Something wrong';
        }
    }

    public function EditEmployeeContractInfo()
    {

    }

    public function UpdateEmployeeContract()
    {

    }
}

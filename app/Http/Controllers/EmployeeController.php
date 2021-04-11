<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use App\Job;
use App\Station;
use App\BusinessUnit;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function EmployeeList()
    {
        $EmployeeDB = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
        return view('admin.employee.index',compact('EmployeeDB'));
    }

   public function EmployeeCreateForm()
   {
       $BusinessDb = BusinessUnit::where('Status',1)->orderBy('id','DESC')->get();
       $StationDb = Station::where('Status',1)->orderBy('id', 'DESC')->get();
       $UserDb = User::where('role','>=',1)->where('status',1)->get();
       return view('admin.employee.create',compact('UserDb','StationDb','BusinessDb'));
   }

    public function SaveToServer($In,$FileName='')
    {

        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);

        $Employee = new Employee();
        $Employee->RegId = auth()->user()->id;
        $Employee->No = $In->No;
        $Employee->UserId = $In->UserId;
        $Employee->Name = $In->Name;
        $Employee->NameMM = $In->NameMM;
        $Employee->Type = $In->Type;
        $Employee->CardId = $In->CardId;
        $Employee->JobField = $In->JobField;
        $Employee->PositionLevel = $In->PositionLevel;
        $Employee->Designation = $In->Designation;
        $Employee->JobStatus = $In->JobStatus;
        $Employee->WageType = $In->WageType;
        $Employee->Grade = $In->Grade;
        $Employee->JoinDate = $In->JoinDate;
        $Employee->WorkShift = $In->WorkShift;
        $Employee->Workschedule = $In->Workschedule;
        $Employee->ResontoJoin = $In->ResontoJoin;
        $Employee->PhoneNumber = $In->PhoneNumber;
        $Employee->Section = $In->Section;
        $Employee->Department = $In->Department;
        $Employee->BusinessUnit = $In->BusinessUnit;
        $Employee->Station = $In->Station;
        $Employee->OfficeEmail = $In->OfficeEmail;
        $Employee->ReportTo = $In->ReportTo;
        $Employee->NotificationEmail = $In->NotificationEmail;
        $Employee->OfficePhone = $In->OfficePhone;
        $Employee->DateOfBirth = $In->DateOfBirth;
        $Employee->BirthOfPlace = $In->BirthOfPlace;
        $Employee->Gender = $In->Gender;
        $Employee->MaritalStatus = $In->MaritalStatus;
        $Employee->BloodGroup = $In->BloodGroup;
        $Employee->DateMarriage = $In->DateMarriage;
        $Employee->Nationality = $In->Nationality;
        $Employee->Religion = $In->Religion;
        $Employee->Race = $In->Race;
        $Employee->personalEmail = $In->personalEmail;
        $Employee->NrcNumber = $In->NrcNumber;
        $Employee->NrcNumberMM = $In->NrcNumberMM;
        $Employee->PassportNumber = $In->PassportNumber;
        $Employee->PassportExpiration = $In->PassportExpiration;
        $Employee->DrivingLicenseExpiration = $In->DrivingLicenseExpiration;
        $Employee->HaveDrivingLicense = $In->HaveDrivingLicense;
        $Employee->DrivingLicenseNumber = $In->DrivingLicenseNumber;
        $Employee->StrongPoint = $In->StrongPoint;
        $Employee->WeakPoint = $In->WeakPoint;
        $Employee->HaveFatalAccident = $In->HaveFatalAccident;
        $Employee->FatalAccidentDescription = $In->FatalAccidentDescription;
        $Employee->HaveMajorSurgery = $In->HaveMajorSurgery;
        $Employee->MajorSurgeryDescription = $In->MajorSurgeryDescription;
        $Employee->HaveHospitalization  = $In->HaveHospitalization;
        $Employee->HospitalizationDescription = $In->HospitalizationDescription;
        $Employee->CurrentAddress = $In->CurrentAddress;
        $Employee->CurrentAddressMM = $In->CurrentAddressMM;
        $Employee->PermanentAddress = $In->PermanentAddress;
        $Employee->PermanentAddressMM = $In->PermanentAddressMM;
        $Employee->DiscType = $In->DiscType;
        $Employee->DiscTestDate = $In->DiscTestDate;
        $Employee->Information = $In->Information;
        $Employee->Token = $Token;
        $Employee->HideShow = 1;
        $Employee->Status = 1;
        if ($FileName != 'file_empty' )
        {
            $Employee->Profile = $FileName;
        }

        if ($Employee->save())
        {
            return true;
        }

    }


    public function EmployeeSave(Request $Data)
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
                $MovingPath = public_path('admin-assets/img/employee');
                $ImgFullName = $Rename.'.'.$Ext;
                $MovingFIle = $ImcommingImg->move($MovingPath, $ImgFullName);
                $Saving = $this->SaveToServer($Data,$ImgFullName);
                if ($Saving)
                {
                    return  response()->json(['code'=>200,'message'=>"Employee successfully add to the database .."]);
                }

            }else{
                return  response()->json(['code'=>403,'message'=>" We only allowed this extension  jpeg , png , jpg , gif "]);
            }
        }else{
            $Saving = $this->SaveToServer($Data,'file_empty');
            if ($Saving)
            {
                return  response()->json(['code'=>200,'message'=>"Employee add to the database .."]);
            }
        }

    }
    public function EditEmployeeInfo($Token)
    {
        $Employee = Employee::where('Token', $Token)->first();
        if (empty($Employee)) {
            return view('admin.errors.404');
        } else {
            return view('admin.employee.edit', compact('Employee'));
        }
    }

    function UpdateEmployeeSave($In,$Filename='')
    {
        $EmployeeFind = Employee::where('Token',$In->EmployeeToken)->first();
        if($Filename != 'file_empty')
        {
            $EmployeeFind->Profile = $Filename;
        }
        $EmployeeFind->No = $In->No;
        $EmployeeFind->UserId = $In->UserId;
        $EmployeeFind->Name = $In->Name;
        $EmployeeFind->NameMM = $In->NameMM;
        $EmployeeFind->Type = $In->Type;
        $EmployeeFind->CardId = $In->CardId;
        $EmployeeFind->JobField = $In->JobField;
        $EmployeeFind->PositionLevel = $In->PositionLevel;
        $EmployeeFind->Designation = $In->Designation;
        $EmployeeFind->JobStatus = $In->JobStatus;
        $EmployeeFind->WageType = $In->WageType;
        $EmployeeFind->Grade = $In->Grade;
        $EmployeeFind->JoinDate = $In->JoinDate;
        $EmployeeFind->WorkShift = $In->WorkShift;
        $EmployeeFind->Workschedule = $In->Workschedule;
        $EmployeeFind->ResontoJoin = $In->ResontoJoin;
        $EmployeeFind->PhoneNumber = $In->PhoneNumber;
        $EmployeeFind->Section = $In->Section;
        $EmployeeFind->Department = $In->Department;
        $EmployeeFind->BusinessUnit = $In->BusinessUnit;
        $EmployeeFind->Station = $In->Station;
        $EmployeeFind->OfficeEmail = $In->OfficeEmail;
        $EmployeeFind->ReportTo = $In->ReportTo;
        $EmployeeFind->NotificationEmail = $In->NotificationEmail;
        $EmployeeFind->OfficePhone = $In->OfficePhone;
        $EmployeeFind->DateOfBirth = $In->DateOfBirth;
        $EmployeeFind->BirthOfPlace = $In->BirthOfPlace;
        $EmployeeFind->Gender = $In->Gender;
        $EmployeeFind->MaritalStatus = $In->MaritalStatus;
        $EmployeeFind->BloodGroup = $In->BloodGroup;
        $EmployeeFind->DateMarriage = $In->DateMarriage;
        $EmployeeFind->Nationality = $In->Nationality;
        $EmployeeFind->Religion = $In->Religion;
        $EmployeeFind->Race = $In->Race;
        $EmployeeFind->personalEmail = $In->personalEmail;
        $EmployeeFind->NrcNumber = $In->NrcNumber;
        $EmployeeFind->NrcNumberMM = $In->NrcNumberMM;
        $EmployeeFind->PassportNumber = $In->PassportNumber;
        $EmployeeFind->PassportExpiration = $In->PassportExpiration;
        $EmployeeFind->DrivingLicenseExpiration = $In->DrivingLicenseExpiration;
        $EmployeeFind->HaveDrivingLicense = $In->HaveDrivingLicense;
        $EmployeeFind->DrivingLicenseNumber = $In->DrivingLicenseNumber;
        $EmployeeFind->StrongPoint = $In->StrongPoint;
        $EmployeeFind->WeakPoint = $In->WeakPoint;
        $EmployeeFind->HaveFatalAccident = $In->HaveFatalAccident;
        $EmployeeFind->FatalAccidentDescription = $In->FatalAccidentDescription;
        $EmployeeFind->HaveMajorSurgery = $In->HaveMajorSurgery;
        $EmployeeFind->MajorSurgeryDescription = $In->MajorSurgeryDescription;
        $EmployeeFind->HaveHospitalization  = $In->HaveHospitalization;
        $EmployeeFind->HospitalizationDescription = $In->HospitalizationDescription;
        $EmployeeFind->CurrentAddress = $In->CurrentAddress;
        $EmployeeFind->CurrentAddressMM = $In->CurrentAddressMM;
        $EmployeeFind->PermanentAddress = $In->PermanentAddress;
        $EmployeeFind->PermanentAddressMM = $In->PermanentAddressMM;
        $EmployeeFind->DiscType = $In->DiscType;
        $EmployeeFind->DiscTestDate = $In->DiscTestDate;
        $EmployeeFind->Information = $In->Information;
        $EmployeeFind->UpdId = auth()->user()->id;
        if ($EmployeeFind->save())
        {
            return true;
        }
    }

    public function UpdateEmployee(Request $In)
    {

        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);

        $ImcommingImg = $In->file('image');
        $StrLen = strlen($ImcommingImg);
        if ($StrLen > 0) {
            $ExtArr = ['jpeg', 'png', 'jpg', 'gif'];
            $Ext = $ImcommingImg->getClientOriginalExtension();
            if (in_array($Ext, $ExtArr)) {
                $EmployeeFind = Employee::where('Token',$In->EmployeeToken)->first();
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/img/employee');
                $ImgFullName = $Rename . '.' . $Ext;

                $MovingFIle = $ImcommingImg->move($MovingPath, $ImgFullName);
                $Saving = $this->UpdateEmployeeSave($In, $ImgFullName);
                if ($Saving) {
                    return response()->json(['code' => 200, 'message' => "UpdateEmployee successfully .."]);
                }

            } else {
                return response()->json(['code' => 403, 'message' => " We only allowed this extension  jpeg , png , jpg , gif "]);
            }
        } else {
            $Saving = $this->UpdateEmployeeSave($In, 'file_empty');
            if ($Saving) {
                return response()->json(['code' => 200, 'message' => "UpdateEmployee successfully.."]);
            }
        }
    }
}

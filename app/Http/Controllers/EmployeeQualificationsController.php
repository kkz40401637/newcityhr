<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeQualifications;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeQualificationsController extends Controller
{
    public function EmployeeQualificationsList()
    {
        $EmployeeQualificationDb = EmployeeQualifications::where('HideShow',1)->get();
        return view('admin.employee.qualification.index',compact('EmployeeQualificationDb'));
    }

    public function EmployeeQualificationsCreateForm($Token)
    {

        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            $EmployeeID = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
            return view('admin.employee.qualification.create',compact('EmployeeID','Token'));
        }else{
            return abort(404);
        }
    }

    public function SaveToServer($In,$FileName='')
    {
        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);

        $EmployeeQualification = new EmployeeQualifications();
        $EmployeeQualification->RegId = auth()->user()->id;
        $EmployeeQualification->EmployeeID = $In->EmployeeID;
        $EmployeeQualification->Degree = $In->Degree;
        $EmployeeQualification->Subject = $In->Subject;
        $EmployeeQualification->Institute = $In->Institute;
        $EmployeeQualification->Grade = $In->Grade;
        $EmployeeQualification->GraduationYear = $In->GraduationYear;
        $EmployeeQualification->FromYear = $In->FromYear;
        $EmployeeQualification->ToYear = $In->ToYear;
        $EmployeeQualification->Token = $Token;
        $EmployeeQualification->HideShow = 1;
        $EmployeeQualification->Status = 1;
        if ($FileName != 'file_empty' )
        {
            $EmployeeQualification->AttachedFile = $FileName;
        }

        if ($EmployeeQualification->save())
        {
            return true;
        }

    }


    public function EmployeeQualificationsSave(Request $In)
    {

        $AttachedFile = $In->file('AttachedFile');
        if (strlen($AttachedFile) != 0) {
            $ExtArr = ['pdf', 'cvs', 'docx', 'xlsx', 'xlsm'];
            $Ext = $AttachedFile->getClientOriginalExtension();
            if (in_array($Ext, $ExtArr)) {
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/attached_file');
                $FileFullName = $Rename . '.' . $Ext;
                $MovingFIle = $AttachedFile->move($MovingPath, $FileFullName);
                $Saving = $this->SaveToServer($In, $FileFullName);
                if ($Saving) {
                    return redirect()->back()->with(['success' => "qualifications data successfully add to the database .."]);
                }
            } else {
                return redirect()->back()->with(['error' => " We only allowed this extension  pdf , docx , cvs , xlsx ..."]);
            }
        } else {
            $Saving = $this->SaveToServer($In, 'file_empty');
            if ($Saving) {
                return  redirect()->route('EmployeeQualificationsList')->with(['success'=>"qualifications data successfully add to the database .."]);
            }
        }

    }

    public function EditEmployeeQualificationInfo($Token)
    {
        $EmployeeQualification = EmployeeQualifications::where('Token', $Token)->first();
        $EmployeeID = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
        if (empty($EmployeeQualification)) {
            return view('admin.errors.404');
        } else {
            return view('admin.employee.qualification.edit', compact('EmployeeQualification','EmployeeID'));
        }
    }

    function UpdateQualificationSave($In,$Filename='')
    {

        $EmployeeQualification = EmployeeQualifications::where('Token',$In->EmployeeQualificationToken)->first();
        if($Filename != 'file_empty')
        {
            $EmployeeQualification->AttachedFile = $Filename;
        }
        $EmployeeQualification->EmployeeID = $In->EmployeeID;
        $EmployeeQualification->Degree = $In->Degree;
        $EmployeeQualification->Subject = $In->Subject;
        $EmployeeQualification->Institute = $In->Institute;
        $EmployeeQualification->Grade = $In->Grade;
        $EmployeeQualification->GraduationYear = $In->GraduationYear;
        $EmployeeQualification->FromYear = $In->FromYear;
        $EmployeeQualification->ToYear = $In->ToYear;
        $EmployeeQualification->UpdId = auth()->user()->id;
        if ($EmployeeQualification->save())
        {
            return true;
        }
    }

    public function UpdateEmployeeQualification(Request $In)
    {
        $current = Carbon::now()->format(' Y:m:d:H:s');
        $Rename = md5($current);
        $Token = str_shuffle($Rename);
        $AttachedFile = $In->file('AttachedFile');
        if (strlen($AttachedFile) != 0) {
            $ExtArr = ['pdf', 'cvs', 'docx', 'xlsx', 'xlsm'];
            $Ext = $AttachedFile->getClientOriginalExtension();
            if (in_array($Ext, $ExtArr)) {
                $EmployeeQualification = EmployeeQualifications::where('Token',$In->EmployeeQualificationToken)->first();
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/attached_file');
                $FileFullName = $Rename . '.' . $Ext;
                $MovingFIle = $AttachedFile->move($MovingPath, $FileFullName);
                $Saving = $this->UpdateQualificationSave($In, $FileFullName);
                if ($Saving) {
                    return redirect()->back()->with(['success' => "Qualifications Updated successfully  .."]);
                }
            } else {
                return redirect()->back()->with(['error' => " We only allowed this extension  pdf , docx , cvs , xlsx ..."]);
            }
        } else {
            $Saving = $this->UpdateQualificationSave($In, 'file_empty');
            if ($Saving) {
                return  redirect()->route('EmployeeQualificationsList')->with(['success'=>"Qualifications Updated successfully  .."]);
            }
        }
    }

}

<?php

namespace App\Http\Controllers;
use App\BusinessUnit;
use App\Company;
use App\Station;
use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function DepartmentList()
    {
        $departments = Department::where('HideShow',1)->orderBy('id','DESC')->get();
        return view('admin.department.index',compact('departments'));
    }


    public function AddDepartmentList()
    {
        $BusinessUnit = BusinessUnit::where('Status',1)->get();
        if (count($BusinessUnit) >= 1 )
        {
            $Stations = Station::where('BuID',$BusinessUnit[0]->id)->where('Status',1)->orderBy('id', 'DESC')->get();
        }else{
            $Stations = Station::where('Status',1)->orderBy('id', 'DESC')->get();
        }
        return view('admin.department.create',compact('BusinessUnit','Stations'));
    }


    public function AddDepartmentStore(Request $request)
    {

        $department = new Department();
        $department->RegId = auth()->user()->id;
        $department->BuID = $request->BuID;
        $department->StationID = $request->StationID;
        $department->Name = $request->DepartmentName;
        $department->Note = $request->AddtionalNote;
        $department->Initial = $request->Initial;
        $department->status = 1;
        $department->HideShow = 1;
        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating
        $department->token = $Token;
        if($department->save())
        {
            return response()->json(['code'=>200,'message'=>'You have been add successfully ..']);
        }else{
            return 'Something wrong';
        }
    }


    public function EditDepartmentInfo($token)
    {
        $department = Department::where('Token', $token)->first();
        $Companydb = Company::where('status',1)->get();
        $Stations = Station::where('status',1)->get();
        if (empty($department) )
        {
            return view('admin.errors.404');
        }else{
            return view('admin.department.edit',compact('department','Companydb','Stations'));
        }
    }


    public function UpdateDepartmentInfo(Request $In)
    {
        $department = Department::where('Token', $In->Token)->first();
        $department->BuID = $In->BuID;
        $department->StationID = $In->StationID;
        $department->Name = $In->Name;
        $department->Note = $In->Note;
        $department->Initial = $In->Initial;
        $department->UpdId = auth()->user()->id;
        $department->save();
        return redirect()->route('DepartmentList')->with(['message'=>'Update Department & Successfully ']);
    }


    public function DepartmentStatusChange(Request  $In)
    {
        $FindingDepartment = Department::find($In->DepartmentId);
        $FindingDepartment->status = 0;
        if ($FindingDepartment->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeSocial;
use App\Ssb;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeSsbController extends Controller
{

    public function SsbIndex()
    {
        $SsbDb = Ssb::where('Status',1)->get();
        return view('admin.employee.ssb.index',compact('SsbDb'));
    }


    public function SsbForm($Token)
    {
        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            $EmployeeDb = Employee::where('Status',1)->get();
            return view('admin.employee.ssb.create',compact('EmployeeDb','Token'));
        }else{
            return abort(404);
        }

    }


    public function SaveToServer($In,$FileName='')
    {

        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating
        $SsbDb = new Ssb();
        $SsbDb->EmployeeID = $In->EmployeeID;
        $SsbDb->SSBNo = $In->SsbNo;
        $SsbDb->EmployerNo = $In->EmployerNo;
        $SsbDb->Token = $Token;
        $SsbDb->HideShow = 1;
        $SsbDb->Status = 1;

        if ($FileName != 'file_empty' )
        {
            $SsbDb->SSBFile = $FileName;
        }

        if ($SsbDb->save())
        {
            return true;
        }else{
            return false;
        }

    }


    public function SsbFormSave(Request $In)
    {

        $FileUpload = $In->file('FileUpload');
        if (strlen($FileUpload) != 0)
        {
            $ExtArr = ['pdf','cvs','docx','xlsx','xlsm','jpg','png','jpeg'];
            $Ext = $FileUpload->getClientOriginalExtension();
            if (in_array($Ext,$ExtArr))
            {
                $current = Carbon::now()->format(' Y:m:d:H:s');
                $Rename = md5($current);
                $MovingPath = public_path('admin-assets/ssb_file');
                $FileFullName = $Rename.'.'.$Ext;
                $MovingFIle = $FileUpload->move($MovingPath, $FileFullName);
                $Saving = $this->SaveToServer($In,$FileFullName);
                if ($Saving)
                {
                    return redirect()->route('SsbIndex')->with(['success'=>'Employee ssb data add successfully ..']);
                }
            }else{
                return  redirect()->back()->with(['error'=>" We only allowed this extension  pdf , docx , cvs , xlsx , jpg , jpeg , png .."]);
            }
        }else{
            $Saving = $this->SaveToServer($In,'file_empty');
            if ($Saving)
            {
                return redirect()->route('SsbIndex')->with(['success'=>'Employee ssb data add successfully ..']);
            }
        }

    }


    public function EditSsbInfo($id)
    {

    }



}

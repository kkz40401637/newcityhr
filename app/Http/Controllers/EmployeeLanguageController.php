<?php

namespace App\Http\Controllers;
use App\EmployeeLanguage;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeLanguageController extends Controller
{
    public function LanguageList()
    {
        $LanguageDb = EmployeeLanguage::where('Status',1)->orderBy('id', 'DESC')->get();
        return view('admin.employee.language.index',compact('LanguageDb'));
    }

    public function LanguageCreateForm($Token)
    {
        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            $EmployeeDb = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
            return view('admin.employee.language.create',compact('EmployeeDb','Token'));
        }else{
            return abort(404);
        }
    }

    public function LanguageSave(Request $In)
    {
        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating

        $LanguageDb = new EmployeeLanguage();
        $LanguageDb->RegId = auth()->user()->id;
        $LanguageDb->EmployeeID = $In->EmployeeID;
        $LanguageDb->Language = $In->Language;
        $LanguageDb->SpeakingLevel = $In->SpeakingLevel;
        $LanguageDb->ReadingLevel = $In->ReadingLevel;
        $LanguageDb->WritingLevel = $In->WritingLevel;
        $LanguageDb->Token = $Token;
        $LanguageDb->HideShow = 1;
        $LanguageDb->Status = 1;

        if($LanguageDb->save())
        {
            return  redirect()->route('LanguageList')->with(['success'=>"Language data successfully add to the database .."]);
        }else{
            return 'Something wrong';
        }
    }

    public function EditLanguageInfo($Token)
    {
        $EmployeeDb = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
        $LanguageDb = EmployeeLanguage::where('Token', $Token)->first();
        if (empty($LanguageDb)) {
            return view('admin.errors.404');
        } else {
            return view('admin.employee.language.edit', compact('LanguageDb','EmployeeDb'));
        }
    }

    public function UpdateLanguage(Request $In)
    {
        $LanguageDb = EmployeeLanguage::where('Token', $In->LanguageToken)->first();
        $LanguageDb->EmployeeID = $In->EmployeeID;
        $LanguageDb->Language = $In->Language;
        $LanguageDb->SpeakingLevel = $In->SpeakingLevel;
        $LanguageDb->ReadingLevel = $In->ReadingLevel;
        $LanguageDb->WritingLevel = $In->WritingLevel;
        $LanguageDb->UpdId = auth()->user()->id;
        $LanguageDb->save();

        return  redirect()->route('LanguageList')->with(['success'=>"Language Updated successfully .."]);
    }
}

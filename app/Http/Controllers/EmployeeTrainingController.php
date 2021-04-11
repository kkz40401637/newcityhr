<?php

namespace App\Http\Controllers;
use App\EmployeeTraining;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeTrainingController extends Controller
{
    public function TrainingList()
    {
        $TrainingDb = EmployeeTraining::where('Status',1)->orderBy('id', 'DESC')->get();
        return view('admin.employee.training.index',compact('TrainingDb'));
    }

    public function TrainingCreateForm($Token)
    {

        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            $EmployeeDb = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
            return view('admin.employee.training.create',compact('EmployeeDb','Token'));
        }else{
            return abort(404);
        }

    }

    public function TrainingSave(Request $In)
    {
        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating

        $EmployeeTrainingDb = new EmployeeTraining();
        $EmployeeTrainingDb->RegId = auth()->user()->id;
        $EmployeeTrainingDb->EmployeeID = $In->EmployeeID;
        $EmployeeTrainingDb->JobField = $In->JobField;
        $EmployeeTrainingDb->TrainingTitle = $In->TrainingTitle;
        $EmployeeTrainingDb->OrganizationName = $In->OrganizationName;
        $EmployeeTrainingDb->Location = $In->Location;
        $EmployeeTrainingDb->TrainingStartDate = $In->TrainingStartDate;
        $EmployeeTrainingDb->TrainingEndDate = $In->TrainingEndDate;
        $EmployeeTrainingDb->Token = $Token;
        $EmployeeTrainingDb->HideShow = 1;
        $EmployeeTrainingDb->Status = 1;

        if($EmployeeTrainingDb->save())
        {
            return  redirect()->route('TrainingList')->with(['success'=>"TrainingList data successfully add to the database .."]);
        }else{
            return 'Something wrong';
        }
    }

    public function EditTrainingInfo($Token)
    {
        $EmployeeTrainingDb = EmployeeTraining::where('Token', $Token)->first();
        $EmployeeDb = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
        if (empty($EmployeeTrainingDb)) {
            return view('admin.errors.404');
        } else {
            return view('admin.employee.training.edit', compact('EmployeeTrainingDb','EmployeeDb'));
        }
    }

    public function UpdateTraining(Request $In)
    {
        $EmployeeTrainingDb = EmployeeTraining::where('Token', $In->TrainingToken)->first();
        $EmployeeTrainingDb->EmployeeID = $In->EmployeeID;
        $EmployeeTrainingDb->JobField = $In->JobField;
        $EmployeeTrainingDb->TrainingTitle = $In->TrainingTitle;
        $EmployeeTrainingDb->OrganizationName = $In->OrganizationName;
        $EmployeeTrainingDb->Location = $In->Location;
        $EmployeeTrainingDb->TrainingStartDate = $In->TrainingStartDate;
        $EmployeeTrainingDb->TrainingEndDate = $In->TrainingEndDate;
        $EmployeeTrainingDb->UpdId = auth()->user()->id;
        $EmployeeTrainingDb->save();

        return  redirect()->route('TrainingList')->with(['success'=>"TrainingList Updated successfully .."]);
    }

}

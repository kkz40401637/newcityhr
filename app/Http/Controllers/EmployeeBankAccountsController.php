<?php

namespace App\Http\Controllers;
use App\EmployeeBankAccounts;
use App\Employee;
use App\Station;
use Illuminate\Http\Request;

class EmployeeBankAccountsController extends Controller
{
    public function BankAccountList()
    {
        $BankaccountDb = EmployeeBankAccounts::where('Status',1)->orderBy('id', 'DESC')->get();
        return view('admin.employee.bankaccount.index',compact('BankaccountDb'));
    }

    public function BankAccountCreateForm($Token)
    {

        $FetchOne = Employee::where('Token',$Token)->first();
        if (!empty($FetchOne))
        {
            $EmployeeDb = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
            $StationDb = Station::where('Status',1)->orderBy('id', 'DESC')->get();
            return view('admin.employee.bankaccount.create',compact('EmployeeDb','StationDb','Token'));
        }else{
            return abort(404);
        }



    }

    public function BankAccountSave(Request $In)
    {
        // Token Creating
        $rename = date("ymdhis");
        $Token = str_shuffle(md5($rename));
        // Token Creating

        $BankAccount = new EmployeeBankAccounts();
        $BankAccount->RegId = auth()->user()->id;
        $BankAccount->EmployeeID = $In->EmployeeID;
        $BankAccount->BankName = $In->BankName;
        $BankAccount->BranchName = $In->BranchName;
        $BankAccount->BranchCode = $In->BranchCode;
        $BankAccount->AccountTitle = $In->AccountTitle;
        $BankAccount->AccountNumber = $In->AccountNumber;
        $BankAccount->AccountType = $In->AccountType;
        $BankAccount->PayAccountPhoneNo = $In->PayAccountPhoneNo;
        $BankAccount->Token = $Token;
        $BankAccount->HideShow = 1;
        $BankAccount->Status = 1;

        if($BankAccount->save())
        {
            return  redirect()->route('BankAccountList')->with(['success'=>"BankAccount successfully add to the database .."]);
        }else{
            return 'Something wrong';
        }
    }

    public function EditBankAccountInfo($Token)
    {
        $BankAccount = EmployeeBankAccounts::where('Token', $Token)->first();
        $EmployeeDb = Employee::where('Status',1)->orderBy('id', 'DESC')->get();
        $StationDb = Station::where('Status',1)->orderBy('id', 'DESC')->get();
        if (empty($BankAccount)) {
            return view('admin.errors.404');
        } else {
            return view('admin.employee.bankaccount.edit', compact('BankAccount','EmployeeDb',"StationDb"));
        }
    }

    public function UpdateBankAccount(Request $In)
    {
        $BankAccount = EmployeeBankAccounts::where('Token', $In->BankToken)->first();
        $BankAccount->EmployeeID = $In->EmployeeID;
        $BankAccount->BankName = $In->BankName;
        $BankAccount->BranchName = $In->BranchName;
        $BankAccount->BranchCode = $In->BranchCode;
        $BankAccount->AccountTitle = $In->AccountTitle;
        $BankAccount->AccountNumber = $In->AccountNumber;
        $BankAccount->AccountType = $In->AccountType;
        $BankAccount->PayAccountPhoneNo = $In->PayAccountPhoneNo;
        $BankAccount->UpdId = auth()->user()->id;
        $BankAccount->save();

        return  redirect()->route('BankAccountList')->with(['success'=>"BankAccount Updated successfully .."]);
    }
}

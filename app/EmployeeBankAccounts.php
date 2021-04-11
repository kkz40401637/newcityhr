<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeBankAccounts extends Model
{
    protected $table = 'employee_bank_accounts';

    public function Employee( )
    {
        return $this->belongsTo('App\Employee','EmployeeID');
    }

    public function StationInfo( )
    {
        return $this->belongsTo('App\Station','BranchName');
    }
}

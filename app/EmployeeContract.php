<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class EmployeeContract extends Model
{
    protected $table = 'employee_contracts';

    public function Employee( )
    {
        return $this->belongsTo('App\Employee','EmployeeID');
    }

    public function UserInfo( )
    {
        return $this->belongsTo('App\User','ApprovedPerson');
    }

    public function DepartmentInfo( )
    {
        return $this->belongsTo('App\Department','Department');
    }
}

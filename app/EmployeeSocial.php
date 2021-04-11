<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeSocial extends Model
{
    protected $table = 'emplyoee_socials';

    public function EmployeeInfo( )
    {
        return $this->belongsTo('App\Employee','EmployeeID');
    }


}

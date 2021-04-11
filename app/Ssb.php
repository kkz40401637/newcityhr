<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ssb extends Model
{
    protected $table = 'employee_ssb';

    public function EmployeeInfo( )
    {
        return $this->belongsTo('App\Employee','EmployeeID');
    }

}

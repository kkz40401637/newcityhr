<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_requesting';

    public function UserInfo( )
    {
        return $this->belongsTo('App\User','RegId');
    }

    public function DepartmentInfo( )
    {
        return $this->belongsTo('App\Department','DepartmentID');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';

    public function UserInfo( )
    {
        return $this->belongsTo('App\User','RegId');
    }

    public function DepartmentInfo( )
    {
        return $this->belongsTo('App\Department','DepartmentID');
    }


}

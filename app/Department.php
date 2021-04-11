<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public function BusinessUnitInfo()
    {
        return $this->belongsTo('App\BusinessUnit','BuID');
    }

    public function StationInfo( )
    {
        return $this->belongsTo('App\Station','StationID');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeOrder extends Model
{
    protected $table = 'office_order';

    public function UserInfo( )
    {
        return $this->belongsTo('App\User','RegId');
    }

    public function WarningUser( )
    {
        return $this->belongsTo('App\User','u_id');
    }

}

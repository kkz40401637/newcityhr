<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $table = 'holidays';

    public function BranchInfo( )
    {
        return $this->belongsTo('App\Station','hide_show');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationNews extends Model
{
    protected $table = 'organization_news';

    public function BranchInfo()
    {
        return $this->belongsTo('App\Station','BranchId');
    }


}

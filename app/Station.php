<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
//    protected $table = 'stations';
    protected $fillable = [
        'StationType','StationName','ParentStation','CurrencyUse','CurrencyUse','CurrencySymbol',
        'Address','PhoneNumber','FaxNumber','EmailAddress','WebSite','AdditionalNote','images'
    ];


    public function BusinessUnitInfo()
    {
        return $this->belongsTo('App\BusinessUnit','BuID');
    }


}













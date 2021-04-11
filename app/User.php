<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_id' ,'name',  'phone', 'email','password', 'status' ,
        'role' , 'token', 'reg_id' ,'upd_id','profile' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $table = 'users';

    public function UserInfo( )
    {
        return $this->belongsTo('App\User','reg_id');
    }

    public function DepartmentInfo()
    {
        return $this->belongsTo('App\Department','department_id');
    }

    public function UserRole()
    {
        return $this->belongsTo('App\Role','role');
    }

}

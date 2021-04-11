<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
class RoleController extends Controller
{
    public function RoleList()
    {
        $RoleDb = Role::where('Status',1)->get();
        return view('admin.role.index',compact('RoleDb'));
    }

    public function AddRole()
    {
        $RecentRole = Role::where('status',1)->orderBy('id', 'DESC')->oldest()->limit(5)->get();
        return view('admin.role.create',compact('RecentRole'));
    }

    public function SaveRole(Request $In)
    {
        // Token Creating
            $rename = date("ymdhis");
            $Token = str_shuffle(md5($rename));
        // Token Creating
        if($In->has('permissions')){

            $role = new Role;
            $role->Name = $In->Title;
            $role->Permission = json_encode($In->permissions);
            $role->Token = $Token;
            $role->Status = 1;
            $role->save();
            return redirect()->route('RoleList');
        }

        return redirect()->back();
    }

    public function EditRoleInfo($token)
    {
        $RoleDb = Role::where('Token', $token)->first();
        $RecentRole = Role::where('status',1)->orderBy('id', 'DESC')->oldest()->limit(5)->get();

        if (empty($RoleDb) )
        {
            return view('admin.errors.404');
        }else{
            return view('admin.role.edit',compact('RoleDb','RecentRole'));
        }
    }

    public function UpdateRoleInfo(Request $In)
    {
        $role =  Role::where('Token',$In->Token)->first();
        $role->Name = $In->Title;
        $role->Permission = json_encode($In->permissions);
        $role->save();
        return redirect()->route('RoleList')->with('message','Update Role & Permission Successfully ');
    }

}

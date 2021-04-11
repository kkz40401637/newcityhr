<?php

namespace App\Http\Controllers;

use App\Department;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function CheckEmail($IncommingEmail)
    {
        $OutUsers = User::where('email',$IncommingEmail)->get();
        if (count($OutUsers) >= 1){
            return true;
        }else{
            return false;
        }
    }


    public function CharGenerate()
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        return $UpperCase.'3D'.$NewCase;
    }


    public function UserList()
    {
        $AuthId = auth()->user()->id;
        $AuthParent = auth()->user()->parent_id;
        $UserDb = User::where('id','!=',$AuthId)->where('role','>=',1)->orderBy('id','DESC')->get();

        return view('admin.register.index',compact('UserDb'));
    }


    public function UserAddForm()
    {
        $DepartmentDb = Department::where('HideShow',1)->get();
        $AuthRole = auth()->user()->role;
        $UserRoles = Role::where('Status',1)->get();
        $RecentUser = User::where('status',1)->where('role','>=',1)->orderBy('id', 'DESC')->oldest()->limit(5)->get();
        return view('admin.register.create',compact('DepartmentDb','RecentUser','UserRoles'));
    }


    public function UserCreat(Request $In)
    {
        $AuthUser = auth()->user();
        $Email = $In->Email;
        if ($this->CheckEmail($Email)){
            return response()->json(['code'=>201,'message'=>'Email already exit ...']);
        }else{

            $UserDb = new User();
            $GetLastRRecord = User::latest('id')->first();
            $LastRcId = empty($GetLastRRecord)?$LastRcId = 1:$LastRcId = $GetLastRRecord->id;
            $NewId = $LastRcId >= 1?$NewId = $LastRcId+1:$NewId = 1;
            // Token Creating
                $rename = date("ymdhis");
                $shuffle = str_shuffle(md5($rename));
                $StuToken = $shuffle;
            // Token Creating
            $CharGenerate = $this->CharGenerate();
            $serial_id = $NewId.$CharGenerate;

            $UserDb->name_id = $serial_id;
            $UserDb->name = $In->Name;
            $UserDb->email = $In->Email;
            $UserDb->phone = $In->Phone;
            $UserDb->password = Hash::make($In->Password);
            $UserDb->parent_id = $AuthUser->parent_id;
            $UserDb->reg_id = $AuthUser->id;
            $UserDb->role = $In->UserRole;
            if($In->UserRole != 2)
            {
                $UserDb->department_id = $In->DepartmentId;
            }
            $UserDb->status = 1;
            $UserDb->token = $StuToken;

            if ($UserDb->save()){
                return response()->json(['code'=>200,'message'=>'Account create successfully']);
            }else{
                return response()->json(['code'=>500,'message'=>'Internal Server Error']);
            }

        }

    }


    public function UserStatusChange(Request  $In)
    {
        $FindingUser = User::find($In->UserId);
        $FindingUser->status = 0;

        if ($FindingUser->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }


    public function UserDisabled(){
        $UserDb = User::where('id','!=',auth()->user()->id)->where('role','>',auth()->user()->role)->where('status',0)->orderBy('id', 'DESC')->get();
        $UserRoles = config('app.UserRole');
        $RoleColor = config('app.RoleColor');
        return view('admin.register.recover')->with(['Users'=>$UserDb,'UserRoles'=>$UserRoles,'RoleColor'=>$RoleColor]);
    }


    public function UserRecover(Request $out){
        $FindingUser = User::find($out->UserId);
        $FindingUser->status = 1;
        if ($FindingUser->save())
        {
            return response()->json(['code'=>200,'message'=>'Success']);
        }else{
            return response()->json(['code'=>500,'message'=>'Internal Server Error']);
        }
    }


    public function DefaultPassword($id){

        $user = User::findOrFail($id);
        $user->password = Hash::make(123456);
        $user->save();
        return redirect()->back()->with('status', 'လူကြီးမင်း၏လုပ်ဆောင်မူ့အောင်မြင်ပါသည်။  Default Passwordမှာ ');

    }


    public function UserEdit($token)
    {

        $user = User::where('token',$token)->first();
        $UserRole = config('app.UserRole');
        return view('admin.register.edit')->with(['User'=>$user,'UserRole'=>$UserRole]);
    }


    public function UpdCheckEmail($Id,$Email)
    {
        $SearchDb = User::where('status',1)->where('email',$Email)->first();
        if (empty($SearchDb)  )
        {
            return true;
        }else{
            if ($SearchDb->id == $Id)
            {
                return true;
            }else{
                return false;
            }
        }
    }


    public function UserUpdate(Request $In)
    {

        $Token = $In->user_token;
        $EditUserDb = User::where('token',$Token)->first();
        $Email = $In->Email;
        if ($this->UpdCheckEmail($EditUserDb->id,$Email))
        {
            $EditUserDb->email = $In->Email;
            $EditUserDb->name = $In->Name;
            $EditUserDb->phone = $In->Phone;
            $EditUserDb->upd_id = auth()->user()->id;
            $EditUserDb->save();
            return redirect('/user/control/')->with('updsuccess', 'လူကြီးမင်း၏အကောင့်ပြင်ဆင်မူ့အောင်မြင်ပါသည်။ ');

        }else{
            return redirect('/user/control/edit/'.$Token)->with('ErrorReturn', ' တူညီသောအိးမေးတွေ့ရှိပါသဖြစ်ပြင်ခွင့်မပြုပါ');
        }

    }



}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'phone' => ['required','min:9']
        ]);
    }

    // yellhtut custom character generator

    public function CharGenerate()
    {
        $UpperCase = chr(rand(65,90));
        $NewCase = chr(rand(65,90));
        $LowerCase = chr(rand(97,122));
        return 'C'.$UpperCase.'HR'.$NewCase.'T';
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {

        // Token Creating
        $rename = date("ymdhis");
        $token = str_shuffle(md5($rename));
        // Token Creating

        $GetLastRRecord = User::latest('id')->first();
        $LastRcId = empty($GetLastRRecord)?$LastRcId = 1:$LastRcId = $GetLastRRecord->id;
        $LastRcId >= 1?$NewId = $LastRcId+1:$NewId = 1;

        $CharGenerate = $this->CharGenerate();
        $name_id = $LastRcId.$CharGenerate;

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'name_id'=>$name_id,
            'phone'=> $data['phone'],
            'status'=> 1,
            'role'=>1,
            'token'=>$token,
            'password' => Hash::make($data['password']),
        ]);
    }
}

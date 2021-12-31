<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Hash;
Use Alert;
use App\Models\User;
use App\Models\UserBasicInfo;

class UserRegistretionController extends Controller
{
    public function home()
    {
        $authId = Auth::guard('web')->id();
        $data['userInfo'] = User::valid()->find($authId);
        //dd($data['userInfo']);
    	return view('web.home', $data);
    }
    public function getRegister()
    {
    	return view('web.register');
    }
    public function postRegister(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name'     => 'required',
            'email'    => 'unique:users,email,$this->id,id',
            'userName' => 'unique:users,userName,$this->id,id',
            'dob'      => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        $hashedPassword = Hash::make($request->password);
            User::create([
                'name'              => $request->name,
                'userName'          => $request->userName, 
                'email'             => $request->email, 
                'dob'               => $request->dob,
                "password"          => $hashedPassword,
                "emailVerification" => 1 ,
                'valid'             => 1, 
            ]);

            $user_id=User::valid()->latest('id')->first();

            //email send
            $details = [
                'link' => url('userVarification/'.$user_id->id),
                'userName' => $request->name,
            ];

            \Mail::to($user_id->email)->send(new \App\Mail\RegisterUser($details));
           
            return redirect()->route('web.registerConfirm');
    }

    public function registerConfirm(){
        return view('web.registerConfirm'); 
    }

    public function userVarification($id){

        $data = array(); 
        $data['id'] = $id;
        return view('web.userProfile.password',$data); 
    }
    public function updatePassword(Request $request, $id){

            User::find($id)->update([
                "emailVerification"   => 1
            ]);
            return redirect()->route('web.login');
       
    }
    
}

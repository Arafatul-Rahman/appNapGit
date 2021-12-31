<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
Use Alert;
use App\Models\User;

class UserControllerWeb extends Controller
{

    public function home()
    {
        $authId = Auth::guard('web')->id();
        $data['userInfo'] = User::valid()->find($authId);
    	return view('web.home', $data);
    }
    public function getLogin()
    {
    	return view('web.login');
    }
    public function postLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'userName' => 'required|userName',
            'password' => 'required|min:6'
        ]);
    	$data = array(
            'userName'       => $request->input('userName'),
            'password'       => $request->input('password'),
            'valid'          => 1,
            'email_verified' => 1
        );

        if (Auth::guard('web')->attempt($data)) {
            return redirect()->route('web.home');
        } else {
            session()->flash('error', 'Invalid Credentials'); 
            return redirect()->route('web.login');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('web.login');
    }
    
    public function resetPassword(){
        return view('web.resetPassword');
    }

    public function resetEmail(Request $request){

        $data =  $request->all();
        $user = User::where('userName', '=', $request->userName)->first();
        if ($user === null) {
            session()->flash('error', 'User Name Not Match. Sorry.'); 
            return redirect()->route('web.resetPassword');

        }else{
             $details = [
                'link' => url('resetPasswordShow/'.$user->id),
                'userName' => $user->name,
            ];

            \Mail::to($user->email)->send(new \App\Mail\ResetPasswordUser($details));
            return view('web.resetPasswordconfarm');
        }

    }
    public function resetPasswordconfarm(){
        return view('web.resetPasswordconfarm'); 
    }
    public function resetPasswordShow($id){

        $data = array(); 
        $data['id'] = $id;
        return view('web.updatePassword',$data); 
    }
    public function updateResetPassword(Request $request, $id){
 
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);
        $hashedPassword = Hash::make($request->password);

        User::find($id)->update([
            "password"        => $hashedPassword,
        ]);

        return redirect()->route('web.login');
       
    }
}

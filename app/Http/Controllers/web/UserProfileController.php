<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request; 
use App\Models\UserBasicInfo;
use App\Models\User;
use Auth; 
use DB; 


class UserProfileController extends Controller
{
    public function userEdit(){
        $authId= Auth::user()->id;

        $data = User::valid()
                ->where('users.id', $authId)
                ->first();         
        return response()->json($data);
    }

    public function profileUpdate(Request $request){
        $output = array();
        $data = $request->all();
        $authId = Auth::user()->id;
        $result = User::where('id',$authId)->update([
            "name"                  => $request->name,
            "phone"                 => $request->phone,
            "username"              => $request->username,
            "address"               => $request->address,
        ]);
        if ($result) {
            $output['status']  = 1;
            $output['message'] = 'Profile has been Updated';
            return response()->json($output);
        } else {
            $output['status']  = 0;
            $output['message'] = 'Profile has not been Updated';
            return response()->json($output);
        }

    }


    public function profileImageUpload(Request $request){
        $output = array();
        $data = $request->all();
        $authId = Auth::user()->id;
        if ($request->hasFile('image')) {
        $photo = time().$request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/uploads/user';
        $request->file('image')->move($destination, $photo);
        }
        else{
            $photo=null;
        }
        $result = User::find($authId)->update([
            "image" => $photo,
        ]);
        if ($result == true) {
            $output['status']  = 1;
            $output['message'] = 'Photo has been Uploded';
            return response()->json($output);
        } else {
            $output['status']  = 0;
            $output['message'] = 'Photo has not been Uploded';
            return response()->json($output);
        }
    }
    public function profileCountry(Request $request)
    {
            $data = DB::table('countries')->get();         
            return response()->json($data);
    }
    
}

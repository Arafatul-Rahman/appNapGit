<?php

namespace App\Http\Controllers\web;

use Helper;
use App\Models\UserFeedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class UserFeedbackControllerWeb extends Controller
{
    public function userFeedbackStore(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'feedback_title' => 'required',
        ]);

        if ($validator->passes()) {
            UserFeedback::create([
                'feedback_title'   => $request->feedback_title,
                'feedback_details' => $request->feedback_details,
                'valid'            => 1
            ]);

            $output['status']  = 1;
            $output['message'] = 'User FeedBack has been Created';
            return response()->json($output);

            return redirect()->back()->with($output);
        } else {
            $output['status']  = 0;
            $output['message'] = 'User FeedBack not been Created';
            return response()->json($output);
        }
    }
}

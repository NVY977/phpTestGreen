<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PersonController extends Controller
{
    function home()
    {
        return view('person.home');
    }


    function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:20',
            'surname' => 'required',
            'email' => 'required|email',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation|min:5|max:12',
            'password_confirmation' => 'min:5|max:12'
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 400, 'error' => $validator->errors()->toArray(), 'mes' => 'Registration error. Try again.']);
        }
        return response()->json(['code' => 200, 'mes' => 'Successful registration. Great job.']);
    }
}

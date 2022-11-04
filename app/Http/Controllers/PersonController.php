<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class PersonController extends Controller
{
    function login()
    {
        return view('person.login');
    }

    function save(Request $request)
    {
        $rules = [
            'name' => 'required|min:2|max:20',
            'surname' => 'required',
            'email' => 'required|email|unique:people',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation|min:5|max:12',
            'password_confirmation' => 'min:5|max:12'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            Log::error('ERROR::422:: ' . $validator->errors());
            return response()->json(['code' => 422, 'error' => $validator->errors()->toArray(), 'msg' => 'Registration error. Try again.']);
        } else {
            $values = [
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ];

            $query = DB::table('people')->insert($values);
            if ($query) {
                Log::info('Successful registration. Great job.');
                return response()->json(['code' => 200, 'msg' => 'Successful registration. Great job.']);
            }
        }
    }
}

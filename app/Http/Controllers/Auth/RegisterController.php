<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller

{
    use RegistersUsers;

    public function register_user(Request $request)
    {
        // Validate Data
        $request->validate(
            [
                'name' => 'required|string|max:255|min:3',
                'email' => 'required|email|unique:users,email',
                'phone_no' => 'required|numeric|unique:users,phone_no',
                'dob' => 'required|date|before:today',
                'address' => 'required',
                'gender' => 'required',
                'password' => 'required|string|min:8|confirmed',
            ]
        );
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password);
        $user->role = "user";
        $user->save();
        return redirect()->route('home')->with('success', 'User created successfully');
    }
}




/**
 * Where to redirect users after registration.
 *
 * @var string
 */


/**
 * Create a new controller instance.
 *
 * @return void
 */


/**
 * Get a validator for an incoming registration request.
 *
 * @param  array  $data
 * @return \Illuminate\Contracts\Validation\Validator
 */


/**
 * Create a new user instance after a valid registration.
 *
 * @param  array  $data
 * @return \App\Models\User
 */

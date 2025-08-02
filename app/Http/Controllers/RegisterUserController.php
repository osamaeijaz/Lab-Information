<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function register_user(Request $request)
    {
        // Validate Data
        $request->validate(
            [
                'name' => 'required|string|max:255|min:3',
                'email' => 'required|email|unique:users,email',
                'phone_no' => 'required|numeric|unique:users,phoneno',
                'd_o_b' => 'required|date|before:today',
                'address' => 'required',
                'gender' => 'required',
                'password' => 'required|string|min:8|confirmed',
            ]
        );
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_no = $request->phoneno;
        $user->d_o_b = $request->dob;
        $user->sddress = $request->address;
        $user->gender = $request->gender;
        $user->password = Hash::make($request->password);
        $user->role = "user";
        $user->save();
        return redirect()->back()->with('success', 'User created successfully');

    }
}

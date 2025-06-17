<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Str;

class AuthController extends Controller
{
    public function registration()
    {
        $data['meta_title'] = 'Registration';
        return view('auth.registration');
    }

    public function registration_post(Request $request)
    {
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'is_role' => 'required',
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->is_role = trim($request->is_role);
        $user->remember_token = Str::random(50);
        $user->save();
        return redirect('login')->with('success', 'Registration successfuly.');
    }

    public function login()
    {
        $data['meta_title'] = 'Login';
        return view('auth.login');
    }

    public function forgot()
    {
        $data['meta_title'] = 'Forgot Password';
        return view('auth.forgot');
    }
}

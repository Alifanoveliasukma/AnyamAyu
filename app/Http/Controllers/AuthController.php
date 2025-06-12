<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration()
    {
        // Logic for displaying the registration form
        return view('auth.registration');
    }
    public function login()
    {
        // Logic for displaying the login form
        return view('auth.login');
    }

    public function forgot()
    {
        // Logic for displaying the forgot password form
        return view('auth.forgot');
    }
}

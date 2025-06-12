<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration()
    {
        $data['meta_title'] = 'Registration';
        return view('auth.registration');
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

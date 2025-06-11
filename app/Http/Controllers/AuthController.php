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
}

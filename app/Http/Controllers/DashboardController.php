<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class DashboardController extends Controller
{
   public function dashboard()
   {

        if(Auth::user()->is_role == 2)
        {
            $data['meta_title'] = "super admin dashboard page";
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('superadmin.dashboard', $data);
        }else if(Auth::user()->is_role == 1)
        {
            $data['meta_title'] = "Admin dashboard page";
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin.dashboard', $data);
        }else if(Auth::user()->is_role == 0)
        {
            $data['meta_title'] = "User dashboard page";
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('user.dashboard', $data);
        }

    }
}
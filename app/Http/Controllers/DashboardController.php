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
        echo "S";die();
    }else if(Auth::user()->is_role == 1)
    {
        echo "A";die();
    }else if(Auth::user()->is_role == 0)
    {
        echo "U";die();
    }

   }
}
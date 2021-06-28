<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->isAdmin==1)
        {
            return view('admin.dashboard');
        }

        return view('users.profile');
    }
}

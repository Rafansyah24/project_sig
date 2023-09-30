<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboarduser()
    {
        return view('user.dashboarduser');
    }
}

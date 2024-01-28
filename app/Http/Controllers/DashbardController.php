<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbardController extends Controller
{
    public function curriculum()  {
        return view('violation.dashboard');
    }
}

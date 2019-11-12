<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // vew dashboard
    public function index()
    {
        return view('dashboard');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){

        return view('admin.dashboard.dashboard')->with(['sidebar'=>'Dashboard']);

    }
}
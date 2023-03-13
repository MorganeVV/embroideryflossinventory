<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        return redirect('dashboard');
    }

    public function showDashboard(){
        return view('dashboard');
    }
}

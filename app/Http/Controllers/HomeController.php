<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dmc;

class HomeController extends Controller
{
    public function showHome(){
        return redirect('dashboard');
    }

    public function showDashboard(){
        $allDmc = app('App\Http\Controllers\DmcController')->getAll();

        return view('dashboard', compact('allDmc'));
    }

}

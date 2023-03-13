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

    public function searchDmc(Request $request){
        $allDmc = app('App\Http\Controllers\DmcController')->getAll();
        $data = app('App\Http\Controllers\DmcController')->search($request);

        $dmc = $data['dmc'];
        $message = $data['message'];

        return view('dashboard', compact('allDmc', 'dmc', 'message'));
    }
}

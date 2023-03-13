<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dmc;

class DmcController extends Controller
{
    public function getAll()
    {
        return Dmc::all()->sortBy('number');
    }
}

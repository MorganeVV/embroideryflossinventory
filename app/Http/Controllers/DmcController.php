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

    public function search(Request $request)
    {
        $searchedDmc = Dmc::find($request->number);

        $data['dmc'] = null;
        $data['message'] = null;

        if ($searchedDmc == null) $data['message'] = "DMC floss with number {$request->number} not found.";
        else $data['dmc'] = $searchedDmc;

        return $data;
    }
}

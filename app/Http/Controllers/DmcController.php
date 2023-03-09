<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dmc;

class DmcController extends Controller
{
    public function show()
    {
        return view('details.dmc', [
            'allDmc' => Dmc::all()->sortBy('number'),
        ]);
    }

    public function search(Request $request)
    {
        $searchedDmc = Dmc::find($request->number);
        $message = null;
        $dmc = null;

        if ($searchedDmc == null) {
            $message = "DMC floss with number {$request->number} not found.";
        } else {
            $dmc = $searchedDmc;
        }

        return view('details.dmc', [
            'allDmc' => Dmc::all(),
            'dmc' => $dmc,
            'message' => $message,
        ]);
    }

    public function update(Request $request)
    {
        $searchedDmc = Dmc::find($request->number);
        $message = null;
        $dmc = null;
        $updated_dmc = null;

        if ($searchedDmc == null) {
            $message = "DMC floss with number {$request->number} could not be updated found.";
        } else {
            $dmc = $searchedDmc;
            $dmc->in_stock = $request->total;
            $dmc->save();
            $updated_dmc = Dmc::find($request->number);

        }

        return view('details.dmc', [
            'allDmc' => Dmc::all(),
            'message' => $message,
            'updated_dmc' => $updated_dmc,
        ]);
    }
}

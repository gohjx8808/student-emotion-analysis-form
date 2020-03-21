<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class SAMController extends Controller
{
    public function saveSAMQ1(Request $request)
    {
        $request->session()->put('SAMQ1', $request->except('_token'));
        // dd(session()->all());
        return redirect('/Q2');
    }

    public function saveSAMQ2(Request $request)
    {
        $request->session()->put('SAMQ2', $request->except('_token'));
        return redirect('/Q3');
    }
}

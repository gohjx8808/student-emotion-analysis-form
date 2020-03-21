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
        $result = array($request->input('SAM1'), $request->input('SAM2'), $request->input('SAM3'));
        $request->session()->put('QuestionSurvey.SAMQ1', $result);
        // dd(session()->all());
        return redirect('/Q2');
    }

    public function saveSAMQ2(Request $request)
    {
        $result = array($request->input('SAM1'), $request->input('SAM2'), $request->input('SAM3'));
        $request->session()->put('QuestionSurvey.SAMQ2', $result);
        // return redirect('/Q2');
    }
}

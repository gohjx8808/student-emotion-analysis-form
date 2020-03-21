<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function saveQ1(Request $request)
    {
        $request->session()->put('Q1', $request->except('_token'));
        // dd(session()->all());
        return redirect('/SAMQ1');
    }

    public function saveQ2(Request $request)
    {
        $request->session()->put('Q2', $request->except('_token'));
        // dd(session()->all());
        return redirect('/SAMQ2');
    }


    public function saveQ3(Request $request)
    {
        $request->session()->put('Q3', $request->except('_token'));
        // dd(session()->all());
        return redirect('/SAMQ3');
    }

    public function saveQ4(Request $request)
    {
        $request->session()->put('Q4', $request->except('_token'));
        // dd(session()->all());
        return redirect('/SAMQ4');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function saveQ1(Request $request)
    {
        $request->session()->flush();
        session()->put('QuestionSurvey', []);
        $request->session()->put('QuestionSurvey.Q1', $request->input('Q1'));
        // dd(session()->all());
        return redirect('/SAMQ1');
    }

    public function saveQ2(Request $request)
    {
        $request->session()->put('QuestionSurvey.Q2', $request->input('Q2'));
        // dd(session()->all());
        return redirect('/SAMQ2');
    }
}

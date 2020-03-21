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
        $request->session()->forget('_previous');
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/student-emotion-analysis-d61dc-3e42dda5c936.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://student-emotion-analysis-d61dc.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $database
            ->getReference('QuestionSurvey')
            ->push(session()->all());

        dd('success');

        return redirect('/SAMQ3');
    }
}

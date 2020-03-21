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

    public function saveSAMQ3(Request $request)
    {
        $request->session()->put('SAMQ3', $request->except('_token'));
        return redirect('/Q4');
    }

    public function saveSAMQ4(Request $request)
    {
        $request->session()->put('SAMQ4', $request->except('_token'));
        // dd(session()->all());
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/student-emotion-analysis-d61dc-3e42dda5c936.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://student-emotion-analysis-d61dc.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $request->session()->forget(['_token','_previous']);

        $database
            ->getReference('QuestionSurvey')
            ->push($request->session()->all());

        return redirect('/thankyou');
    }
}

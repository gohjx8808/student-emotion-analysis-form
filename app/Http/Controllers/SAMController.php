<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
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
        return redirect('/Q5');
    }

    public function saveSAMQ5(Request $request)
    {
        $request->session()->put('SAMQ5', $request->except('_token'));
        return redirect('/Q6');
    }

    public function saveSAMQ6(Request $request)
    {
        $request->session()->put('SAMQ6', $request->except('_token'));
        return redirect('/Q7');
    }

    public function saveSAMQ7(Request $request)
    {
        $request->session()->put('SAMQ7', $request->except('_token'));
        return redirect('/Q8');
    }

    public function saveSAMQ8(Request $request)
    {
        $request->session()->put('SAMQ8', $request->except('_token'));
        return redirect('/Q9');
    }

    public function saveSAMQ9(Request $request)
    {
        $request->session()->put('SAMQ9', $request->except('_token'));
        return redirect('/Q10');
    }

    public function saveSAMQ10(Request $request)
    {
        $request->session()->put('SAMQ10', $request->except('_token'));
        // dd(session()->all());
        $serviceAccount = ServiceAccount::fromJsonFile(base_path() . '/student-emotion-analysis-d61dc-3e42dda5c936.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://student-emotion-analysis-d61dc.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $request->session()->forget(['_token', '_previous']);

        $database
            ->getReference(Carbon::now())
            ->push($request->session()->all());

        return redirect('/thankyou');
    }
}

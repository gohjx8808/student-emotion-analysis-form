<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SAMController extends Controller
{

    public function saveSAMVid1(Request $request)
    {
        $request->session()->put('SAMVid1', $request->except('_token'));
            return redirect('/TutVid2');
    }

    public function saveSAMVid2(Request $request)
    {
        $request->session()->put('SAMVid2', $request->except('_token'));
            return redirect('/TutVid3');
    }

    public function saveSAMVid3(Request $request)
    {
        $request->session()->put('SAMVid3', $request->except('_token'));
            return redirect('/TutVid4');
    }

    public function saveSAMVid4(Request $request)
    {
        $request->session()->put('SAMVid4', $request->except('_token'));
            return redirect('/IntroDemo');
    }

    public function saveSAMQTest(Request $request)
    {
        $request->session()->put('SAMQTest', $request->except('_token'));

        $ques = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $randomQues = $ques[array_rand($ques)];
        $removeIndex = array_search($randomQues, $ques);
        if ($removeIndex !== false) {
            unset($ques[$removeIndex]);
        }
        $ques = array_values($ques);
        $request->session()->put('QuestionsRemaining', $ques);
        $request->session()->put('counter', 0);
        // dd($request->session()->all());
        return redirect('/Q' . $randomQues);
    }

    public function saveSAMQ1(Request $request)
    {
        $request->session()->put('SAMQ1', $request->except('_token'));
        return redirect('/calm');
    }

    public function saveSAMQ2(Request $request)
    {
        // dd($request->session()->all());
        $request->session()->put('SAMQ2', $request->except('_token'));
        return redirect('/calm');
    }

    public function saveSAMQ3(Request $request)
    {
        $request->session()->put('SAMQ3', $request->except('_token'));
        return redirect('/calm');
    }

    public function saveSAMQ4(Request $request)
    {
        $request->session()->put('SAMQ4', $request->except('_token'));
        return redirect('/calm');
    }

    public function saveSAMQ5(Request $request)
    {
        $request->session()->put('SAMQ5', $request->except('_token'));
        return redirect('/calm');
    }

    public function saveSAMQ6(Request $request)
    {
        $request->session()->put('SAMQ6', $request->except('_token'));
        return redirect('/calm');
    }

    public function saveSAMQ7(Request $request)
    {
        $request->session()->put('SAMQ7', $request->except('_token'));
        return redirect('/calm');

    }

    public function saveSAMQ8(Request $request)
    {
        $request->session()->put('SAMQ8', $request->except('_token'));
        return redirect('/calm');

    }

    public function saveSAMQ9(Request $request)
    {
        $request->session()->put('SAMQ9', $request->except('_token'));
        return redirect('/calm');

    }

    public function saveSAMQ10(Request $request)
    {
        $request->session()->put('SAMQ10', $request->except('_token'));
        // dd(session()->all());
        return redirect('/calm');
    }

}

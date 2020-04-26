<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SAMController extends Controller
{

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

        return redirect('/Q' . $randomQues);
    }

    public function saveSAMQ1(Request $request)
    {
        $request->session()->put('SAMQ1', $request->except('_token'));
        // dd($request->session()->get('QuestionsRemaining'));

        // dd(session()->all());
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ2(Request $request)
    {
        // dd($request->session()->all());
        $request->session()->put('SAMQ2', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ3(Request $request)
    {
        $request->session()->put('SAMQ3', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ4(Request $request)
    {
        $request->session()->put('SAMQ4', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ5(Request $request)
    {
        $request->session()->put('SAMQ5', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ6(Request $request)
    {
        $request->session()->put('SAMQ6', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ7(Request $request)
    {
        $request->session()->put('SAMQ7', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ8(Request $request)
    {
        $request->session()->put('SAMQ8', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ9(Request $request)
    {
        $request->session()->put('SAMQ9', $request->except('_token'));
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function saveSAMQ10(Request $request)
    {
        $request->session()->put('SAMQ10', $request->except('_token'));
        // dd(session()->all());
        if (count($request->session()->get('QuestionsRemaining')) > 0) {
            $randomQues = $this->randomizedQuestion($request);
            return redirect('/Q' . $randomQues);
        } else {
            // $this->saveToFirebase($request);
            return redirect('/endSurvey');
        }
    }

    public function randomizedQuestion(Request $request)
    {
        $ques = $request->session()->get('QuestionsRemaining');
        $randomQues = $ques[array_rand($ques)];
        $removeIndex = array_search($randomQues, $ques);
        if ($removeIndex !== false) {
            unset($ques[$removeIndex]);
        }
        $ques = array_values($ques);
        $request->session()->put('QuestionsRemaining', $ques);

        return $randomQues;
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionsController extends Controller
{

    public function displayQ1(Request $request)
    {
        if ($request->session()->has('Q1')) {
            $Qformat=$request->session()->get('Q1')['Qformat'];
        }
        else{
            $Qformat = rand(1, 4);
        }
        return view('Q1')->with('Qformat', $Qformat);
    }

    public function saveQ1(Request $request)
    {
        $request->session()->put('Q1', $request->input());

        // dd(session()->all());
        $displayedResult = array();

        $random = $request->input('Qformat');
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q1_1'), 'c', ''));
        } else if ($random == 2 || $random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1A'), 'x'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1B'), 'y'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1C'), 'z'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1D'), 'x'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1E'), 'y'));
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        // dd(session()->all());

        // dd($displayedResult);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
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
        $displayedResult = array();
        array_push($displayedResult, $this->checkResult($request->input('Q3_1'), 'encapsulation', ''));
        array_push($displayedResult, $this->checkResult($request->input('Q3_2'), 'string', ''));
        array_push($displayedResult, $this->checkResult($request->input('Q3_3'), 'super', ''));
        // dd(session()->all());

        $correct = $this->checkCorrectness($displayedResult);
        $added = $request->session()->get('Q3');
        $added['correct'] = strval($correct) . '/3';
        $request->session()->put('Q3', $added);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function saveQ4(Request $request)
    {
        $request->session()->put('Q4', $request->except('_token'));
        // dd($request->input());
        $displayedResult = array();
        array_push($displayedResult, $this->checkResult($request->input('Q4_1'), 'true', ''));
        array_push($displayedResult, $this->checkResult($request->input('Q4_2'), 'false', 'Explanation: The
        default case in a switch structure is optional and only used when none of the other cases match.'));
        array_push($displayedResult, $this->checkResult($request->input('Q4_3'), 'true', ''));
        // dd($displayedResult);

        $correct = $this->checkCorrectness($displayedResult);
        $added = $request->session()->get('Q4');
        $added['correct'] = strval($correct) . '/3';
        $request->session()->put('Q4', $added);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function checkMCQ($input, $correctAns, $explanations)
    {
        $result = 'The correct answer is ' . strtoupper($correctAns) . '.';
        if (is_bool($input) == false) {
            $input = strtolower($input);
        }
        // dd($input);
        if ($input == $correctAns) {
            $result .= ' Your answer is correct.';
            $explanation = '';
            $flag = true;
        } else {
            $result .= ' Your answer is wrong.';
            $explanation = $explanations;
            $flag = false;
        }

        return array($result, $explanation, $flag);
    }

    public function checkOnlyOneSelect($input, $correctAns)
    {
        if (is_bool($input) == false) {
            $input = strtolower($input);
        }
        // dd($input);
        if ($input == $correctAns) {
            $flag = true;
        } else {
            $flag = false;
        }

        return $flag;
    }

    public function checkMultipleSelect($input, $correctAns)
    {
        if (is_bool($input) == false) {
            $input = strtolower($input);
        }
        // dd($input);
        if ($input != $correctAns) {
            $flag = true;
        } else {
            $flag = false;
        }

        return $flag;
    }
}

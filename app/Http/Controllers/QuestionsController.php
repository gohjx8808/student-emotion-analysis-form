<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionsController extends Controller
{

    public function displayQ1(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q1')) {
            $Qformat = $request->session()->get('Q1')['Qformat'];
        } else {
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
            $added = $request->session()->get('Q1');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q1', $added);
        } else if ($random == 2 || $random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1A'), 'x'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1B'), 'y'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1C'), 'z'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1D'), 'x'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1E'), 'y'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q1');
            $added['correct'] = strval($correct) . '/5';
            $request->session()->put('Q1', $added);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        // dd(session()->all());

        // dd($displayedResult);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ2(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q2')) {
            $Qformat = $request->session()->get('Q2')['Qformat'];
        } else {
            $Qformat = rand(1, 4);
        }
        return view('Q2')->with('Qformat', $Qformat);
    }

    public function saveQ2(Request $request)
    {
        $request->session()->put('Q2', $request->input());

        // dd(session()->all());
        $displayedResult = array();

        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q2_1'), 'b', ''));
            $added = $request->session()->get('Q2');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q2', $added);
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q2_1A'), 'a'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q2');
            $added['correct'] = strval($correct) . '/1';
            $request->session()->put('Q2', $added);
        } else if ($random == 3) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q2_1A'), 'while(x>=0)'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q2');
            $added['correct'] = strval($correct) . '/1';
            $request->session()->put('Q2', $added);
            array_push($displayedResult, 'The appropriate answer is while(x>=0). Your answer is correct as long as it fits the logic.');
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

        // dd(session()->all());

        // dd($displayedResult);

        return redirect()->back()->withInput()->with(['endResult' => $displayedResult]);
    }

    public function displayQ3(Request $request)
    {
        // dd($request->session()->all());
        if ($request->session()->has('Q3')) {
            $Qformat = $request->session()->get('Q3')['Qformat'];
        } else {
            $Qformat = rand(1, 4);
        }
        return view('Q3')->with('Qformat', $Qformat);
    }

    public function saveQ3(Request $request)
    {
        $request->session()->put('Q3', $request->except('_token'));
        $displayedResult = array();
        $random = $request->input('Qformat');
        // dd($random);
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q3_1'), 'a', ''));
            $added = $request->session()->get('Q3');
            $added['correct'] = strval($displayedResult[0][2] ? 1 : 0) . '/1';
            $request->session()->put('Q3', $added);
        } else if ($random == 2 || $random == 3) {
            array_push($displayedResult, $this->checkMultipleSelect($request->input('Q3_1A'), 'x'));
            array_push($displayedResult, $this->checkMultipleSelect($request->input('Q3_1B'), 'x'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q3_1C'), 'x'));
            $correct = $this->checkCorrectness($displayedResult);
            $added = $request->session()->get('Q3');
            $added['correct'] = strval($correct) . '/3';
            $request->session()->put('Q3', $added);
            // dd($displayedResult);
        } else if ($random == 4) {
            array_push($displayedResult, 'Thank you for the answer. We will look through it.');
        }

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

    public function checkCorrectness($array)
    {
        $correct = 0;
        // dd($array);
        for ($x = 0; $x < count($array); $x++) {
            if ($array[$x]) {
                $correct++;
            }
        }

        return $correct;
    }
}

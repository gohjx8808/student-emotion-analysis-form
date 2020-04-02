<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function saveQ1(Request $request)
    {
        $request->session()->put('Q1', $request->input());

        // dd(session()->all());
        $displayedResult = array();

        $random = 2;
        if ($random == 1) {
            array_push($displayedResult, $this->checkMCQ($request->input('Q1_1'), 'd', 'Explanation : Inside main, 2 integer variables a, b are declared.
            By following operator precedence,
            a = 12 + 21 * 3 - 9 / 2 = 12 + 63 - 9 / 2 = 12 + 63 - 4 = 75 - 4 = 71,
            b = 14 - 32 * 4 + 175 / 8 - 3 = 14 - 128 + 175 / 8 - 3 = 14 - 128 + 21 - 3 = -114 + 21 - 3 = -93 - 3 = -96
            Then first if condition is checked, ++a > 71 && --b < 20 is 72 > 71 && -97 < 20 = true && true = true
            So, if is executed and value of a which is 72 and b which is -97 are printed.
            Then next if condition is checked, b-- == -97 || a-- < 100 is -97 == -97 || a-- < 100 is
            (true || anything(either true or false)) = true
            (by short circuiting, as only first part(b-- == -97) of the or (||) condition suffices to evaluate the result, so the second part (a-- < 100) is not executed and hence a is not decremented)
            So only b decrements and display statement is executed and prints value of a and b as 72 and -98 respectively.'));
        } else if ($random == 2) {
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1A'), '>'));
            array_push($displayedResult, $this->checkOnlyOneSelect($request->input('Q1_1B'), '<'));
            array_push($displayedResult, $this->checkMultipleSelect($request->input('Q1_1C'), '='));
            array_push($displayedResult, $this->checkMultipleSelect($request->input('Q1_1D'), '<'));
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
            $result .= ' Your answer is correct';
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

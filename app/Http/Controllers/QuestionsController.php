<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function saveQ1(Request $request)
    {
        $request->session()->put('Q1', $request->input());

        dd(session()->all());
        $displayedResult = array();

        array_push($displayedResult, $this->checkResult($request->input('Q1_1'), 'a', 'Explanation : static
        variable is class level variable. If we create multiple objects of class and all objects can point same
        reference of static variable means If you can change the value of static variable in any object, then
        compiler automatically updates the value of all object static variables.'));

        array_push($displayedResult, $this->checkResult($request->input('Q1_2'), 'a', 'Explanation: When a
        constructor is marked as private, the only way to create a new object of that class from some external
        class is using a method that creates a new object, as defined above in the program. The method create()
        is responsible for creation of Temp object from some other external class. Once the object is created, its
        method can be invoked from the class in which the object is created.'));

        array_push($displayedResult, $this->checkResult($request->input('Q1_3'), 'a', 'Explanation : The statement
        new Beta().go() executes in two phases. In first phase Beta class constructor is called. There is no
        instance member present in Beta class. So now Beta class constructor is executed. As Beta class extends
        Alpha class, so call goes to Alpha class constructor as first statement by default(Put by the compiler)
        is super() in the Beta class constructor. Now as one instance variable(type) is present in Alpha class,
        so it will get memory and now Alpha class constructor is executed, then call return to Beta class
        constructor next statement. So alpha beta is printed. In second phase go() method is called on this object.
        As there is only one variable(type) in the object whose value is a. So it will be changed to b and printed
        two times. The super keyword here is of no use.'));

        $correct = $this->checkCorrectness($displayedResult);
        $added = $request->session()->get('Q1');
        $added['correct'] = strval($correct) . '/3';
        $request->session()->put('Q1', $added);

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

    public function checkResult($input, $correctAns, $explanations)
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

    public function checkCorrectness($array)
    {
        $correct = 0;

        for ($x = 0; $x < count($array); $x++) {
            if ($array[$x][2]) {
                $correct++;
            }
        }

        return $correct;
    }
}

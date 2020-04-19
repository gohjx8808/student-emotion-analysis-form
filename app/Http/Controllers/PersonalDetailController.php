<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    public function update(Request $request)
    {
        session()->flush();
        $ques = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $randomQues = $ques[array_rand($ques)];
        $removeIndex = array_search($randomQues, $ques);
        if ($removeIndex !== false) {
            unset($ques[$removeIndex]);
        }
        $ques = array_values($ques);
        $request->session()->put('PersonalDetails', $request->input());
        $request->session()->put('QuestionsRemaining', $ques);
        $request->session()->put('counter', 0);

        // dd($randomQues);
        // dd(session()->all());
        return redirect('/Q' . $randomQues);
    }
}

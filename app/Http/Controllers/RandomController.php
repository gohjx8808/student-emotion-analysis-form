<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function randomQ(Request $request)
    {
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

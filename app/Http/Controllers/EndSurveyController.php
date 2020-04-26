<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class EndSurveyController extends Controller
{
    //
    public function surveySubmit(Request $request)
    {
        $request->session()->put('EndSurvey', $request->except('_token'));
        $this->saveToFirebase($request);
        return redirect('/thankyou');
    }

    public function saveToFirebase(Request $request)
    {
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
    }
}

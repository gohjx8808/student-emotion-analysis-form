<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    public function update(Request $request)
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/student-emotion-analysis-d61dc-3e42dda5c936.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://student-emotion-analysis-d61dc.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $database
            ->getReference('personalDetails')
            ->push($request->input());

        return redirect('/Q1');
    }
}

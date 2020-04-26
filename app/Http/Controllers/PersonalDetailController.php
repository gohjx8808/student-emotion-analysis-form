<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PersonalDetailController extends Controller
{
    public function update(Request $request)
    {
        session()->flush();

        $request->session()->put('PersonalDetails', $request->input());

        // dd($randomQues);
        // dd(session()->all());
        return redirect('/QTest');
    }
}

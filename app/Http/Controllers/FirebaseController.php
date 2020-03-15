<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


class FirebaseController extends Controller
{
    //
    public function index()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/student-emotion-analysis-d61dc-3e42dda5c936.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://student-emotion-analysis-d61dc.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
            ->getReference('blog/posts')
            ->push([
                'title' => 'Laravel FireBase Tutorial',
                'category' => 'Laravel'
            ]);
        echo '<pre>';
        print_r($newPost->getvalue());
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personalDetail', function () {
    return view('personalDetail');
});

Route::post('/personaldetail/post', 'PersonalDetailController@update');

Route::get('/Q1', 'QuestionsController@displayQ1');

Route::post('/Q1/save','QuestionsController@saveQ1');

Route::get('/SAMQ1',function(){
    return view('SAMQ1');
});

Route::post('/SAMQ1/save','SAMController@saveSAMQ1');

Route::get('/Q2','QuestionsController@displayQ2');

Route::post('/Q2/save','QuestionsController@saveQ2');

Route::get('/SAMQ2',function(){
    return view('SAMQ2');
});

Route::post('/SAMQ2/save','SAMController@saveSAMQ2');

Route::get('/Q3','QuestionsController@displayQ3');

Route::post('/Q3/save','QuestionsController@saveQ3');

Route::get('/SAMQ3',function(){
    return view('SAMQ3');
});

Route::post('/SAMQ3/save','SAMController@saveSAMQ3');

Route::get('/Q4','QuestionsController@displayQ4');

Route::post('/Q4/save','QuestionsController@saveQ4');

Route::get('/SAMQ4',function(){
    return view('SAMQ4');
});

Route::post('/SAMQ4/save','SAMController@saveSAMQ4');

Route::get('/Q5','QuestionsController@displayQ5');

Route::post('/Q5/save','QuestionsController@saveQ5');

Route::get('/SAMQ5',function(){
    return view('SAMQ5');
});

Route::post('/SAMQ5/save','SAMController@saveSAMQ5');

Route::get('/Q6','QuestionsController@displayQ6');

Route::post('/Q6/save','QuestionsController@saveQ6');

Route::get('/SAMQ6',function(){
    return view('SAMQ6');
});

Route::post('/SAMQ6/save','SAMController@saveSAMQ6');

Route::get('/Q7','QuestionsController@displayQ7');

Route::post('/Q7/save','QuestionsController@saveQ7');

Route::get('/SAMQ7',function(){
    return view('SAMQ7');
});

Route::post('/SAMQ7/save','SAMController@saveSAMQ7');

Route::get('/Q8','QuestionsController@displayQ8');

Route::post('/Q8/save','QuestionsController@saveQ8');

Route::get('/SAMQ8',function(){
    return view('SAMQ8');
});

Route::post('/SAMQ8/save','SAMController@saveSAMQ8');

Route::get('/Q9','QuestionsController@displayQ9');

Route::post('/Q9/save','QuestionsController@saveQ9');

Route::get('/SAMQ9',function(){
    return view('SAMQ9');
});

Route::post('/SAMQ9/save','SAMController@saveSAMQ9');

Route::get('/Q10','QuestionsController@displayQ10');

Route::post('/Q10/save','QuestionsController@saveQ10');

Route::get('/SAMQ10',function(){
    return view('SAMQ10');
});

Route::post('/SAMQ10/save','SAMController@saveSAMQ10');

Route::get('/thankyou',function(){
    return view('thankyou');
});


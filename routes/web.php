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

Route::get('/thankyou',function(){
    return view('thankyou');
});


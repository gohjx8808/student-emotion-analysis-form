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

Route::get('/Q1', function () {
    return view('questions1');
});

Route::post('/Q1/save','QuestionsController@saveQ1');

Route::get('/SAMQ1',function(){
    return view('SAMQ1');
});

Route::post('/SAMQ1/save','SAMController@saveSAMQ1');

Route::get('/Q2',function(){
    return view('questions2');
});

Route::post('/Q2/save','QuestionsController@saveQ2');

Route::get('/SAMQ2',function(){
    return view('SAMQ2');
});

Route::post('/SAMQ2/save','SAMController@saveSAMQ2');

Route::get('/Q3',function(){
    return view('questions3');
});

Route::post('/Q3/save','QuestionsController@saveQ3');


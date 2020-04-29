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

Route::get('/TutVid1', function () {
    return view('TutorialVideo.TutorialVid1');
});

Route::get('/SAMVid1',function(){
    return view('TutorialSAM.SAMVid1');
});

Route::post('/SAMVid1/save','SAMController@saveSAMVid1');

Route::get('/TutVid2', function () {
    return view('TutorialVideo.TutorialVid2');
});

Route::get('/SAMVid2',function(){
    return view('TutorialSAM.SAMVid2');
});

Route::post('/SAMVid2/save','SAMController@saveSAMVid2');

Route::get('/TutVid3', function () {
    return view('TutorialVideo.TutorialVid3');
});

Route::get('/SAMVid3',function(){
    return view('TutorialSAM.SAMVid3');
});

Route::post('/SAMVid3/save','SAMController@saveSAMVid3');

Route::get('/TutVid4', function () {
    return view('TutorialVideo.TutorialVid4');
});

Route::get('/SAMVid4',function(){
    return view('TutorialSAM.SAMVid4');
});

Route::post('/SAMVid4/save','SAMController@saveSAMVid4');

Route::post('/SAMQTest/save','SAMController@saveSAMQTest');

Route::get('/QTest', function () {
    return view('QTest');
});

Route::post('/QTest/save','QuestionsController@saveQTest');

Route::get('/SAMQTest',function(){
    return view('SAMQTest');
});

Route::post('/SAMQTest/save','SAMController@saveSAMQTest');

Route::get('/endSurvey', function () {
    return view('endSurvey');
});

Route::post('/endSurvey/post', 'EndSurveyController@surveySubmit');

Route::post('/personaldetail/post', 'PersonalDetailController@update');

Route::get('/Q1', 'QuestionsController@displayQ1');

Route::post('/Q1/save','QuestionsController@saveQ1');

Route::get('/SAMQ1',function(){
    return view('SAMTest.SAMQ1');
});

Route::post('/SAMQ1/save','SAMController@saveSAMQ1');

Route::get('/Q2','QuestionsController@displayQ2');

Route::post('/Q2/save','QuestionsController@saveQ2');

Route::get('/SAMQ2',function(){
    return view('SAMTest.SAMQ2');
});

Route::post('/SAMQ2/save','SAMController@saveSAMQ2');

Route::get('/Q3','QuestionsController@displayQ3');

Route::post('/Q3/save','QuestionsController@saveQ3');

Route::get('/SAMQ3',function(){
    return view('SAMTest.SAMQ3');
});

Route::post('/SAMQ3/save','SAMController@saveSAMQ3');

Route::get('/Q4','QuestionsController@displayQ4');

Route::post('/Q4/save','QuestionsController@saveQ4');

Route::get('/SAMQ4',function(){
    return view('SAMTest.SAMQ4');
});

Route::post('/SAMQ4/save','SAMController@saveSAMQ4');

Route::get('/Q5','QuestionsController@displayQ5');

Route::post('/Q5/save','QuestionsController@saveQ5');

Route::get('/SAMQ5',function(){
    return view('SAMTest.SAMQ5');
});

Route::post('/SAMQ5/save','SAMController@saveSAMQ5');

Route::get('/Q6','QuestionsController@displayQ6');

Route::post('/Q6/save','QuestionsController@saveQ6');

Route::get('/SAMQ6',function(){
    return view('SAMTest.SAMQ6');
});

Route::post('/SAMQ6/save','SAMController@saveSAMQ6');

Route::get('/Q7','QuestionsController@displayQ7');

Route::post('/Q7/save','QuestionsController@saveQ7');

Route::get('/SAMQ7',function(){
    return view('SAMTest.SAMQ7');
});

Route::post('/SAMQ7/save','SAMController@saveSAMQ7');

Route::get('/Q8','QuestionsController@displayQ8');

Route::post('/Q8/save','QuestionsController@saveQ8');

Route::get('/SAMQ8',function(){
    return view('SAMTest.SAMQ8');
});

Route::post('/SAMQ8/save','SAMController@saveSAMQ8');

Route::get('/Q9','QuestionsController@displayQ9');

Route::post('/Q9/save','QuestionsController@saveQ9');

Route::get('/SAMQ9',function(){
    return view('SAMTest.SAMQ9');
});

Route::post('/SAMQ9/save','SAMController@saveSAMQ9');

Route::get('/Q10','QuestionsController@displayQ10');

Route::post('/Q10/save','QuestionsController@saveQ10');

Route::get('/SAMQ10',function(){
    return view('SAMTest.SAMQ10');
});

Route::post('/SAMQ10/save','SAMController@saveSAMQ10');

Route::get('/thankyou',function(){
    return view('thankyou');
});


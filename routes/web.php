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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/patient/{id}/test','ExaminationController@createPrediction')->name('create.prediction');
Route::post('/patient/{id}/test', 'ExaminationController@predict')->name('predict');
Route::get('/test/{id}', 'ExaminationController@show')->name('examination');
Route::post('/examination/{id}','ExaminationController@comment')->name('comment');
Route::get('/examination/{id}','ExaminationController@getcomment')->name('getcomment');
Route::get('/examination/pdf/{id}','ExaminationController@downloadPdf')->name('examination.pdf');
Route::get('/patient/pdf', 'PatientController@pdf')->name('patient.pdf');
Route::get('/doctors/pdf', 'DocterController@pdf')->name('doctor.pdf');
Route::resource('/patient', 'PatientController');
Route::resource('/docter', 'DocterController');
Route::get('/examinations/dataset','ExaminationController@dataset')->name('examination.dataset');
Route::get('/examinations','ExaminationController@index')->name('examination.index');
Route::get('/examinations/pdf','ExaminationController@printPDF')->name('examination.list.pdf');
Route::post('/search/id','PatientController@searchID')->name('examination.search.id');
Route::post('/search/names','PatientController@searchByNames')->name('examination.search.names');
Route::get('/search/patient', function () {
    return view('patient.search');
});



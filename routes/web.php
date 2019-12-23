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
Route::get('trials/index', 'TrialController@index');
Route::post('trials', 'TrialController@store');
Route::get('trials/{trial}','TrialController@trialSingle');
Route::get('trials/download/{name}','TrialController@downloadCurriculum');
Route::get('email','TrialController@sendEmail');

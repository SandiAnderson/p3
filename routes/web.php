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

Route::get('/', 'RaceTimeController@welcome');

Route::get('/estimate', 'RaceTimeController@estimate');

Route::get('/calc','RaceTimeController@calculate');

Route::get('/planner', 'RaceTimeController@planner');

Route::get('/plan','RaceTimeController@plan');

Route::fallback(function () {
    return view('welcome');
});

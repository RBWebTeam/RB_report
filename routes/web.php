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

// Route::get('PiechartProductwise','PiechartController@getpiechartnew2');
// Route::get('PiechartBankwise','PiechartController@getpiechartnew3');
// Route::get('PiechartStatus','PiechartController@getpiechartnew4');
Route::get('PiechartLeadStatus','PiechartController@getpiechartnew5');
//Route::get('PiechartLeadDetails','PiechartController@getpiechartnew6');


//Route::get('PiechartCityWise','PiechartController@PiechartCitywise');
//Route::get('BarChartdemo','PiechartController@BarchartDemo1');

//Route::post('BarChartdemo','PiechartController@BarchartDemo1');

// Route::post('/getleaddetails/{id}','PiechartController@loadleadstatus');
//Route::get('Piechartteamwise','PiechartController@piechatteamwise');
//Route::get('welcome','PiechartController@Piechartwelcome');
//Route::get('PiechartCombo','PiechartController@Piechartcombo1');












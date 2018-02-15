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




Route::get('lead-status-report','DashboardController@cartdashboard');

 //Route::get('lead-status-report-test','PiechartController@getpiechartdata');
  Route::get('citywise-report','DashboardController@citywiseleadreport');
  Route::get('bankwise-report','DashboardController@bankwiseleadreport');
  Route::get('teamwise-report','DashboardController@teamwiseleadreport');
    Route::get('monthwise-report','DashboardController@monthwiseleadreport');
     Route::get('productwise-report','DashboardController@productwiseleadreport');
      //  Route::get('Barchartdemo-report','PiechartController@productwiseleadreport');














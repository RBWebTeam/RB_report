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


<<<<<<< HEAD
// Route::get('PiechartLeadStatus/{emp_code}','PiechartController@getpiechart');

 //Route::get('lead-status-report','PiechartController@getpiechart');
Route::get('lead-status-report','DashboardController@cartdashboard');

 Route::get('lead-status-report-test','PiechartController@getpiechartdata');
  Route::get('ab','DashboardController@getpiechartdata');
   
  // Route::get('Dashboard-bankwise-report','DashboardController@cartdashboard');
  Route::get('bd','DashboardController@getpiechartdata1');
  Route::get('cd','DashboardController@getpiechartdata2');
    Route::get('ad','DashboardController@getpiechartdata3');
      //Route::get('Dashboard-bankwise-report','DashboardController@getpiechartdata3');
     // Route::get('abd','DashboardController@getpiechartdata22');
      //   Route::get('lead-status-report-test','PiechartController@getpiechart');

      




=======
Route::get('PiechartLeadStatus','PiechartController@getpiechart');
>>>>>>> 74b404aca9e3a619f380eca4b35ef1c58ecdc43a











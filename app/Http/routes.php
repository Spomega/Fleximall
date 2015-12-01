<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/',function () {
//    return view('pages.index');
//});
Route::get('/','HomeController@index');
//Delivery routes
Route::get('delivery/create','DeliveryController@create');
Route::post('delivery/store','DeliveryController@store');

//Schedule
Route::get('schedule/create','ScheduleController@create');
Route::post('schedule/store','ScheduleController@store');

//Merchant
Route::get('merchant/create','MerchantController@create');
Route::get('merchant/dashboard','MerchantController@showdashboard');
Route::get('merchant/dash','MerchantController@index');
Route::post('merchant/store','MerchantController@store');



//Item
Route::get('item/create','ItemController@create');
Route::post('item/store','ItemController@store');
Route::get('item/view','ItemController@index');
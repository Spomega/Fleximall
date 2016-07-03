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
Route::get('merchant/mallview/{id}','MerchantController@show');
Route::post('merchant/store','MerchantController@store');
Route::post('merchant/logout','Auth\AuthController@getLogout');




//Item
Route::get('item/create','ItemController@create');
Route::post('item/store','ItemController@store');
Route::get('item/view','ItemController@index');

//User
Route::get('user/create','UserController@create');
Route::post('user/store','UserController@store');

//Mall
Route::get('mall/create','MallController@create');
Route::post('mall/store','MallController@store');

//Login

Route::get('login/index','Auth\AuthController@loginview');
Route::get('users/login','Auth\AuthController@loginview');
Route::post('users/login', 'Auth\AuthController@postLogin');
Route::get('users/logout', 'Auth\AuthController@getLogout');

Route::get('users/register', 'Auth\AuthController@getRegister');
Route::post('users/register', 'Auth\AuthController@postRegister');
Route::post('users/merchantregister', 'Auth\AuthController@merchantRegister');
//
/* Authenticated users */
//Route::group(['middleware' => 'auth'], function()
//{
//    Route::get('item/create', array('as'=>'additem', function()
//	{
//	return View('pages.auth.login');
//	}));
//        
//    Route::get('merchant/dash', array('as'=>'dashboard', function()
//	{
//	return View('pages.auth.login');
//	}));       
//                
//});
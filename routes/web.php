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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UserController');
Route::group(['prefix' => 'orders'], function () {
    Route::get('get_order_table','OrderController@getOrderTable');
});
Route::resource('orders','OrderController');
Route::group(['prefix' => 'jobs'], function () {
    Route::get('get_jobs_table','JobController@getJobTable');
});
Route::resource('jobs','JobController');

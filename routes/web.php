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
    return view('session.create');
});

Route::get('index', 'CustomerController@index')->name('home');
Route::get('customer', 'CustomerController@create');
Route::post('customer', 'CustomerController@store');
Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy');




/*Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('session', 'SessionController');
Route::resource('customer', 'CustomerController');*/

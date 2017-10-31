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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'PagesController@index')->name('index');
Route::get('/cities', 'PagesController@cities')->name('cities');
Route::get('/routes', 'PagesController@routes')->name('routes');
Route::get('/stations', 'PagesController@stations')->name('stations');

Route::get('/users', 'PagesController@users')->name('users_page');
Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

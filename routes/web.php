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
Route::get('/cities', 'PagesController@cities')->name('cities_page');
Route::get('/routes', 'PagesController@routes')->name('routes_page');
Route::get('/routetypes', 'PagesController@routes')->name('routetypes_page');
Route::get('/stations', 'PagesController@stations')->name('stations_page');

Route::get('/users', 'PagesController@users')->name('users_page');
Route::resource('users', 'UserController');
Route::resource('cities', 'CityController');
Route::resource('routetypes', 'RoutetypeController');
Route::resource('routes', 'RouteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/routetypes', 'PagesController@routetypes')->name('routetypes_page');
Route::get('stations/create', 'StationsController@create')->name('add_new_station');
Route::get('stations/edit', 'StationsController@edit')->name('edit_station_info');
Route::get('/stations', 'PagesController@stations')->name('stations_page');
Route::get('/fuels', 'PagesController@fuels')->name('fuels_page');
Route::get('/users', 'PagesController@users')->name('users_page');
//Route::resource('users', 'UserController');
//Route::resource('cities', 'CityController');
//Route::resource('routetypes', 'RoutetypeController');
//Route::resource('routes', 'RouteController');
//Route::resource('fuels', 'FuelController');
//Route::resource('citiesroutes', 'CityRouteController');
//Route::resource('stationsfuels', 'StationFuelController');

Route::group(['middleware' => 'auth'], function () {
	//Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    Route::resource('cities', 'CityController');
	Route::get('user/{user}', 'UserController@show');	
	Route::group(['middleware' => 'admin'], function () {	
		
		Route::resource('users', 'UserController');
                Route::resource('routetypes', 'RoutetypeController');
                Route::resource('routes', 'RouteController');
                Route::resource('fuels', 'FuelController');
                Route::resource('citiesroutes', 'CityRouteController');
                Route::resource('stationsfuels', 'StationFuelController');
//Route::get('user/create', 'UserController@create')->name('add_new_user');
		//Route::get('user', 'UserController@index')->name('get_all_users');
		//Route::get('user/{$id}/edit', 'UserController@edit')->name('edit_user_info');
		
		});
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', 'BuildController@build');
Route::get('/build', 'BuildController@build')->name('build');

Route::get('/part', 'PartController@list')->name('part.list');
Route::get('/part/create', 'PartController@create')->name('part.create');
Route::post('/part/store', 'PartController@store')->name('part.store');
Route::delete('/part/{part}', 'PartController@destroy')->name('part.destroy');
Route::get('/part/edit/{part}', 'PartController@edit')->name('part.edit');
Route::post('/part/update/{part}', 'PartController@update')->name('part.update');

Route::get('/item', 'ItemController@list')->name('item.list');
Route::get('/item/create', 'ItemController@create')->name('item.create');
Route::post('/item/store', 'ItemController@store')->name('item.store');
Route::delete('/item/{item}', 'ItemController@destroy')->name('item.destroy');
Route::get('/item/edit/{item}', 'ItemController@edit')->name('item.edit');
Route::post('/item/update/{item}', 'ItemController@update')->name('item.update');
	
Route::get('/admin', 'BoatController@list')->name('boat.list');
Route::get('/boat', 'BoatController@list')->name('boat.list');
Route::get('/boat/create', 'BoatController@create')->name('boat.create');
Route::post('/boat/store', 'BoatController@store')->name('boat.store');
Route::delete('/boat/{boat}', 'BoatController@destroy')->name('boat.destroy');
Route::get('/boat/edit/{boat}', 'BoatController@edit')->name('boat.edit');
Route::post('/boat/update/{boat}', 'BoatController@update')->name('boat.update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

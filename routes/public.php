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

//store
Route::get('/', 'Store\\StoreController@index')->name('index');
Route::get('/about', 'Store\\StoreController@about')->name('about');
Route::get('/hotels', 'Store\\StoreController@hotels')->name('hotels');
Route::get('/tours', 'Store\\StoreController@tours')->name('tours');
Route::get('/flight', 'Store\\StoreController@flight')->name('flight');
Route::get('/contact', 'Store\\StoreController@contact')->name('contact');

Route::get('/p-single/{slug}', 'Store\\StoreController@pSingle')->name('p_single');
Route::get('/room/details/{slug}', 'Store\\StoreController@roomDetails')->name('room-detail');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::delete('admin/roles', 'Admin\\RolesController@index')
	->name('roles.index')
    ->middleware('permission:roles.index');


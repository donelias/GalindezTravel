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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::delete('admin/roles', 'Admin\\RolesController@index')
	->name('roles.index')
    ->middleware('permission:roles.index');

//Posts
Route::get('admin/posts/create', 'PostController@create')->name('posts.create');
Route::post('admin/posts/create', 'PostController@store')->name('posts.store');
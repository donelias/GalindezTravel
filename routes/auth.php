<?php

//Posts
Route::get('admin/posts/create', 'PostController@create')->name('posts.create');
Route::post('admin/posts/create', 'PostController@store')->name('posts.store');
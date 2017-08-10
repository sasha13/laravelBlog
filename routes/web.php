<?php


Route::get('/', 'PostsController@index');
Route::get('/posts/{id}', 'PostsController@show');
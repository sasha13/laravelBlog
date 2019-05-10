<?php


Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::post('/posts/{id}/comment', 'CommentsController@store');
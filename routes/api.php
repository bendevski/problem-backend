<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/posts', 'PostController@all')->name('posts.all');
Route::post('/posts', 'PostController@store')->name('posts.new');
Route::post('/posts/{post}/comment','PostController@comment')->name('posts.comment');
Route::post('/posts/{post}/like', 'PostController@like')->name('posts.like');
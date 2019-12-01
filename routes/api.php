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
Route::put('/posts/like/{post}', 'PostController@like')->name('posts.like');
Route::post('/comment','CommentController@store')->name('comments.new');

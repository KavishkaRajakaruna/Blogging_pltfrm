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

Route::view('write', 'internal.write');
Route::view('posts', 'internal.blog');
Route::view('about', 'internal.about');

Route::get('posts' , 'PostsController@list');
Route::post('write', 'PostsController@store');

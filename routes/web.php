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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/index', 'HomeController@olddashboard')->name('index')->middleware('verified');

//profile route
Route::get('/profile', 'ProfileController@index')->name('profile')->middleware('verified');
Route::patch('/profile/update/{id}', 'ProfileController@update');
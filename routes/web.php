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

//route pelatihan
Route::get('/pelatihan', 'PelatihanController@index')->name('pelatihan')->middleware('verified');
Route::get('/pelatihan/create', 'PelatihanController@create')->name('add-pelatihan')->middleware('verified');
Route::post('/pelatihan/create/store', 'PelatihanController@store');

//route teknis
Route::post('/pelatihan/teknis/store', 'TeknisController@store')->name('teknis');

//route manajemen
Route::post('/pelatihan/manajemen/store', 'ManajemenController@store')->name('manajemen');

//route generasi
Route::post('/pelatihan/generasi/store', 'GenerasiController@store')->name('generasi');
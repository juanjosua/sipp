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

//route pelaporan
Route::get('/pelaporan', 'PelaporanController@index')->name('pelaporan')->middleware('verified');
Route::get('/pelaporan/create', 'PelaporanController@create')->name('add-pelaporan')->middleware('verified');
Route::post('/pelaporan/create/store', 'PelaporanController@store');
Route::get('/downloadPDF','PelaporanController@downloadPDF')->name('unduh-pelaporan')->middleware('verified');

//route admin
Route::get('/users', 'AdminController@index')->name('users')->middleware('verified');
Route::get('/users/update/{id}', 'AdminController@update');

//route teknis
Route::get('/pelatihan/teknis/store', 'TeknisController@store')->name('teknis');

//route manajemen
Route::get('/pelatihan/manajemen/store', 'ManajemenController@store')->name('manajemen');

//route generasi
Route::get('/pelatihan/generasi/store', 'GenerasiController@store')->name('generasi');
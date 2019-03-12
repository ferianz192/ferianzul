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

<<<<<<< HEAD
Route::get('layout', function () {
    return view('layouts.master');
});
Route::get('dashboard', function () {
    return view('dashboard.index');
});
=======
>>>>>>> ec48bd5612a076dd44e23a53b76fd8ccdde9de02
Route::get('/lihatdata', 'CategoryController@index')->name('lihatdata');
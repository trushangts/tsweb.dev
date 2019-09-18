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

Route::get('/test', function () {
    return view('dashboard');
});

Auth::routes();
Auth::routes();
Route::get('/employee', 'HomeController@employee')->name('home');
Route::get('/adduser', 'HomeController@addUser')->name('adduser');
Route::post('/saveuser', 'HomeController@store')->name('saveuser');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

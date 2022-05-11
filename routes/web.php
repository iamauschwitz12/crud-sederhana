<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/masuk', function () {
    return view('auth.masuk');
});

Route::get('/','IndexController@index');

Route::get('gso23a','ControllerGso23a@index')->middleware('auth');
Route::get('tambah_gso23a','ControllerGso23a@create')->middleware('auth');
Route::post('/prosestambahgso23a','ControllerGso23a@store')->middleware('auth');
Route::delete('/gso23a/{gso23a}','ControllerGso23a@destroy')->middleware('auth');
Route::get('/editgso23a/{gso23a}','ControllerGso23a@edit')->middleware('auth');
Route::patch('/editgso23a/{gso23a}','ControllerGso23a@update')->middleware('auth');

Route::get('gso24a','ControllerGso24a@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

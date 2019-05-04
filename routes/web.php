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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/animals','AnimalController@index');
Route::resource('animals','AnimalController');

Route::get('/staffhome', 'HomeController@staffindex');


//Route::get('/animals','AnimalController@index')->name('index');
Route::resource('adoption','AdoptionController');

Route::get('/available','AdoptionController@availablereqindex');

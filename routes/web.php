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

Route::get('/','WebpagesController@index');


Route::resource('/tugboat','TugboatController');
Route::get('/tugboat','TugboatController@index');

//Route::get('/', function () {
//    return view('welcome');
//});

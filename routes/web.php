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


//Routes with CRUD and Full Resources
Route::resource('/berth','BerthController');
Route::resource('/contracts','ContractsController');
Route::resource('/employees','EmployeesController');
Route::resource('/equipments','EquipmentsController');
Route::resource('/pier','PierController');
Route::resource('/position','PositionController');
Route::resource('/tugboat','TugboatController');




//Delete Functions use the following format

// Route::get('/modulename/{databaseID}/delete','ControllerRou  te');

Route::get('/berth/{intBerthID}/delete','BerthController@delete');
Route::get('/employees/{intEmployeeID}/delete','EmployeesController@delete');
Route::get('/pier/{intPierID}/delete','PierController@delete');
Route::get('/position/{intPositionID}/delete','PositionController@delete');


//Route::get('/', function () {
//    return view('welcome');
//});

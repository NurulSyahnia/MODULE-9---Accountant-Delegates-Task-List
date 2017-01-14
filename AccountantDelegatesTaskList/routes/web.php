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


Route::get("index", "testing@index");

Route::get("index1", "testing@index1");

Route::get("index2", "testing@index2");

Route::get("show/{id}", "testing@show");

Route::get("edit/{id}", "testing@edit");

Route::patch("update/{id}", "testing@update");


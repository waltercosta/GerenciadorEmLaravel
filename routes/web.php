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

Route::get('/teste', 'TaskController@index');
Route::post('/teste', 'TaskController@create');
Route::get('/teste/{id}/edit', 'TaskController@edit');
Route::post('/teste/update', 'TaskController@update');
Route::get('/teste/{id}/delete', 'TaskController@delete');
Route::get('/walter', 'TaskController@GetIndex');
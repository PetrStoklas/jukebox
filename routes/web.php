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


Route::get('/delete', 'ViewController@delete');
Route::post('/delete', 'ViewController@delete');
Route::get('/', 'ViewController@store');
Route::get('/detail', 'ViewController@detail');
Route::post('/', 'ViewController@store');
Route::get('/list', 'ListController@list');
// Route::get('/', 'ListController@list');

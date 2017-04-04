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

Route::get('/cern', function () {
	return view('cern');
});

Route::get('/julian', function () {
	return view('julian');
});

Route::get('/tools', 'ToolsController@index')->name('tools.tools');
Route::get('/frontend', 'ToolsController@frontend')->name('frontend');
Route::get('/backend', 'ToolsController@backend')->name('backend');
Route::get('/database', 'ToolsController@database')->name('database');
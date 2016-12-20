<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', ['middleware' => 'cors', 'uses' => 'HomeController@index']);
//Route::post('add', ['middleware' => 'cors', 'uses' => 'HomeController@add']);
//Route::post('/add', ['middleware' => 'cors', 'uses' => 'HomeController@add']);
Route::post('/add', 'HomeController@add')->middleware('cors');
//Route::get('message/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'message.edit'])->where(['id' => '[0-9]+']);

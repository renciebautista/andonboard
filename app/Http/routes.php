<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);

Route::get('dashboard/{slug}', ['as' => 'dashboard.show', 'uses' => 'DashboardController@show']);

Route::get('display/{slug}', ['as' => 'display.show', 'uses' => 'DisplayController@show']);

Route::resource('lines', 'LineController');

Route::resource('shifts', 'ShiftController');




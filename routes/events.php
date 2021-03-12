<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Event Routes
|--------------------------------------------------------------------------
|
| Here is where you can register event routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/events', 'EventController@index');
Route::resource('events', 'EventController');


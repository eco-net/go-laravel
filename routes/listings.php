<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Listing Routes
|--------------------------------------------------------------------------
|
| Here is where you can register listing routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sider', 'LisingController@index');

Route::resource('sider', 'ListingController', ['names' => 'listing']);


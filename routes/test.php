<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/','TestController@demo');
Route::get('/send','TestController@mail');

Route::get('/notify/{notify}/edit','TestController@notify');

Route::get('/notifyDb','TestController@notifyDb');

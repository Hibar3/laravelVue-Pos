<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Api paths
Route::get('/order','OrderController@all');
Route::get('/order/{id}','OrderController@show');
Route::post('/order','OrderController@store');
Route::put('/order/{id}','OrderController@update');
Route::delete('/order/{id}','OrderController@delete');
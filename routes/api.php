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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mobil','Admin\ApiDaftarmobilController@get_mobil');
Route::get('/mobil/{brand}','Admin\ApiDaftarmobilController@get_mobil_brand');
Route::get('/mobil/{id}/edit','Admin\ApiDaftarmobilController@edit_mobil');
Route::put('/mobil/{id}/update','Admin\ApiDaftarmobilController@update_mobil');
Route::get('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@get_mobil_brand_type');
Route::post('/mobil/','Admin\ApiDaftarmobilController@tambah');
Route::post('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@store');
Route::patch('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@update');
Route::delete('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@destroy');
Route::delete('/mobil/{id}/delete','Admin\ApiDaftarmobilController@hapus');

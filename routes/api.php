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
Route::get('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@get_mobil_brand_type');
Route::post('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@store');
Route::patch('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@update');
Route::delete('/mobil/{brand}/{type}','Admin\ApiDaftarmobilController@destroy');

//Route::patch('/mobil/{brand}/{type}',function (){
//    return response()->json(1,200);
//});

//Route::post('/coba','RfidController@index');

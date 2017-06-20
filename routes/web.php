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
Route::GET("/",function(){
	return view('welcome');
});

Route::POST("orders","OrderController@create");
Route::PUT("orders/search","OrderController@search");
Route::GET("orders/today","OrderController@today");
Route::PUT("orders/{id}","OrderController@update");
Route::PUT("orders/{id}/cancel","OrderController@cancel");
Route::PUT("orders/{id}/payment","OrderController@payment");
Route::GET("orders/{id}","OrderController@get_id");

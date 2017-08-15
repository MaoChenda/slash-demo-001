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
Route::get('/home','homeController@home');
Route::get('/news','homeController@news');
Route::get('/quote request','homeController@quoteRequest');
Route::get('/contact us', 'homeController@contactUs');

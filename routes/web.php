<?php

use Illuminate\Support\Facades\Route;

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
Route::get('sincos','TrigonometriController@sincos');
Route::get('koord','TrigonometriController@koord');
Route::get('tambahkurang','TrigonometriController@tambahkurang');
Route::get('sinus','TrigonometriController@sinus');
Route::get('cosinus','TrigonometriController@cosinus');
Route::get('kutub','TrigonometriController@kutub');
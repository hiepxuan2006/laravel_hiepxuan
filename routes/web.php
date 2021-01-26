<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCotroller;
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
Route::get('/createuser','App\Http\Controllers\UserCotroller@create');
Route::post('/store','App\Http\Controllers\UserCotroller@store');
Route::get('/view','App\Http\Controllers\ViewController@index');
Route::get('/view/{id}/edit','App\Http\Controllers\ViewController@edit');
Route::post('/view/{id}/update','App\Http\Controllers\ViewController@update');
//Route::get('/view/delete/{id}','App\Http\Controllers\ViewController@delete');


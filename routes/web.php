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

Route::group(['prefix'=>'users'],function (){
    Route::get('/',[UserCotroller::class,'index'])->name('users.index');
    Route::get('/createuser',[UserCotroller::class,'create'])->name('users.create');
    Route::post('/store',[UserCotroller::class,'store'])->name('users.store');
    Route::get('/edit/{id}',[UserCotroller::class,'edit'])->name('users.edit');
    Route::post('/update/{id}',[UserCotroller::class,'update'])->name('users.update');
    Route::delete('/delete/{id}',[UserCotroller::class,'destroy'])->name('users.delete');
});

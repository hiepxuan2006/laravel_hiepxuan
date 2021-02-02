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

Route::group(['prefix'=>'user'],function (){
    Route::get('/',[UserCotroller::class,'index'])->name('user.index');
    Route::get('/createuser',[UserCotroller::class,'create'])->name('user.create');
    Route::post('/store',[UserCotroller::class,'store'])->name('user.store');
    Route::get('/edit/{id}',[UserCotroller::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserCotroller::class,'update'])->name('user.update');
    Route::delete('/delete/{id}',[UserCotroller::class,'destroy'])->name('user.delete');
});

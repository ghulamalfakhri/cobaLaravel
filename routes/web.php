<?php

use App\Http\Controllers\home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mobilController;

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



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/sewa', function () {
    return view('sewa');
});

Route::get('/mobil', function () {
    return view('mobil');
});

Route::get('/about', function () {
    return view('about');
});




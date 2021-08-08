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

/*Route::get('/', function () {
    return view('pages.home');
});*/

Route::get('/', [App\Http\Controllers\HomeController::Class, 'index'])->name('home');

Route::get('/hotel-rooms', [App\Http\Controllers\HotelController::Class, 'index'])->name('hotel-rooms');

Route::get('/room-detail', [App\Http\Controllers\HotelController::Class, 'roomDetail'])->name('room-detail');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

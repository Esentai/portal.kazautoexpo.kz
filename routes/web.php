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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/online', [App\Http\Controllers\OnlineController::class, 'index'])->name('online');
Route::get('/online/create', [App\Http\Controllers\OnlineController::class, 'create'])->name('online.create');
Route::post('/online/store', [App\Http\Controllers\OnlineController::class, 'store'])->name('online.store');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/perpustakaan', \App\Http\Controllers\PerpusController::class);
// Route::post('/store', [ \App\Http\Controllers\PerpusController::class, 'store'])->name('store');

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');

Route::get('/register', [\App\Http\Controllers\UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register.store');
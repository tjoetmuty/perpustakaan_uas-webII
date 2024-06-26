<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/perpustakaan', \App\Http\Controllers\PerpusController::class);
// Route::resource('/angggota', \App\Http\Controllers\AnggotaController::class);
Route::post('/store', [ \App\Http\Controllers\AnggotaController::class, 'store'])->name('anggota.store');
Route::get('/store', [ \App\Http\Controllers\AnggotaController::class, 'index'])->name('anggota.index');

Route::post('/peminjaman', [\App\Http\Controllers\PeminjamanController::class, 'store'])->name("peminjaman.store");
Route::get('/peminjaman', [\App\Http\Controllers\PeminjamanController::class, 'index'])->name("peminjaman.index");


Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');

Route::get('/register', [\App\Http\Controllers\UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register.store');
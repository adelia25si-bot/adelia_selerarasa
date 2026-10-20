<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest');
});

Route::get('/guest', function () {
    return view('guest');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::resource('menus', MenuController::class);

Route::resource('kategoris', KategoriController::class);

Route::resource('pelanggans', PelangganController::class);

Route::resource('users', UserController::class);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/auth', function () {
    return view('login');
});

Route::post('/auth', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('admin');
})->name('dashboard');

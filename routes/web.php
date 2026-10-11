<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
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

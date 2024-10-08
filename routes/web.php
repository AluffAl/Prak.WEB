<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//GET

Route::get('/login', [authController::class, 'login'])->name('login');

Route::get('/register', [authController::class, 'register'])->name('register');

Route::get('/beranda', [authController::class, 'beranda'])->name('beranda');

Route::get('/penjumlahan', [authController::class, 'penjumlahan'])->name('penjumlahan');









//POST

Route::post('/login', [authcontroller::class, 'login'])->name('login.submit');

Route::post('/register', [authcontroller::class, 'register'])->name('register');

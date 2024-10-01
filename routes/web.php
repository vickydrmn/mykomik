<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomikController;
use App\Models\Komik;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});



route::get('/komik', [KomikController::class, 'tampil'])->name('komik.tampil');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    route::get('/komik/tambah', [KomikController::class, 'tambah'])->name('komik.tambah');
    route::post('/komik/submit', [KomikController::class, 'submit'])->name('komik.submit');
    route::get('/komik/edit/{id}', [KomikController::class, 'edit'])->name('komik.edit');
    route::post('/komik/update/{id}', [KomikController::class, 'update'])->name('komik.update');
    route::delete('/komik/delete/{id}', [KomikController::class, 'delete'])->name('komik.delete');
});

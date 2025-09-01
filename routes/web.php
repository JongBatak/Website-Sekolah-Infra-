<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Pendaftaran;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Sambutan
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

Route::get('/pendaftaran', [Pendaftaran::class, 'index'])->name('pendaftaran');
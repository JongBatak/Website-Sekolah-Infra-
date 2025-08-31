<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SambutanController;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Sambutan
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');
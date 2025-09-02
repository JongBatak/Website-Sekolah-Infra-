<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\FormulirController;

// ================= Halaman Utama =================
Route::get('/', [HomeController::class, 'index'])->name('home');

// ================= Halaman Sambutan =================
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');

// ================= Halaman Galeri =================
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// ================= Halaman Pendaftaran (awal) =================
Route::get('/pendaftaran', [Pendaftaran::class, 'index'])->name('pendaftaran');

// ================= Formulir Pendaftaran =================
// Tampilkan form
Route::get('/formulir', [FormulirController::class, 'create'])
    ->name('pendaftaran.formulir');

// Simpan form
Route::post('/formulir', [FormulirController::class, 'store'])
    ->name('pendaftaran.formulir.store');

// ================= Halaman Validasi =================
Route::get('/validasi', [FormulirController::class, 'validasi'])
    ->name('pendaftaran.validasi');

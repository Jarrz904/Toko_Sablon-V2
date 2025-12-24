<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SablonController;

// Route untuk halaman utama (Landing Page)
Route::get('/', [SablonController::class, 'index'])->name('home');

// Route tambahan jika ingin membuat halaman detail produk di masa depan
Route::get('/produk/{id}', [SablonController::class, 'show']);
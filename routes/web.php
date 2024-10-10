<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/blog',);

Route::prefix('publikasi')->group(function () {
    Route::get('/{category}/{slug}', [PublikasiController::class, 'show'])->name('publikasi.detail');
    Route::get('/{category}', [PublikasiController::class, 'index'])->name('publikasi.index');
});

Route::prefix('layanan')->group(function () {
    Route::get('/{category}', [LayananController::class, 'index'])->name('layanan.index');
});

Route::prefix('pelanggan')->group(function () {
    Route::get('/{category}', [PelangganController::class, 'index'])->name('pelanggan.index');
});

Route::prefix('info')->group(function () {
    Route::get('/{category}', [InfoController::class, 'index'])->name('info.index');
});

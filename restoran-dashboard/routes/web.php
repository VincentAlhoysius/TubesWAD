<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;  // Import ProdukController!

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// Route resource sudah termasuk produk.index, produk.create, edit, update, destroy, dll
Route::resource('produk', ProdukController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Jika user mengakses web utama (localhost:8000), arahkan langsung ke halaman produk
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Mendaftarkan rute CRUD lengkap untuk produk
Route::resource('products', ProductController::class);
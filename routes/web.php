<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\KategoriController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::resource('product', ProductController::class);
#=====
Route::get('/suplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('suplier.index');
Route::get('/suplier/create', [App\Http\Controllers\SupplierController::class, 'create'])->name('suplier.create');
Route::post('/suplier/store', [App\Http\Controllers\SupplierController::class, 'store'])->name('suplier.store');
#=====
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/store', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/product/edit/{id}', function ($id) {
    $namaproduct = [
        1 => "AIDA",
        2 => "BENGBENG",
        3 => "CHOCOLATOS",
        4 => "TARO",
        5 => "TIDAK DI TEMUKAN"
           ];
        $namaproduct = $namaproduct[$id] ?? '';
    return view('product.edit', compact('id', 'namaproduct'));
});
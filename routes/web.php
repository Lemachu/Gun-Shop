<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunController;
use App\Http\Controllers\KategorijeController;
use App\Http\Controllers\BrandController;

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('guns', [GunController::class, 'index'])->name('guns');
Route::middleware(['auth:sanctum', 'verified'])->get('home', [GunController::class, 'home'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('kategorije', [KategorijeController::class, 'index'])->name('kategorije');
Route::middleware(['auth:sanctum', 'verified'])->get('brands', [BrandController::class, 'index'])->name('brands');
Route::middleware(['auth:sanctum', 'verified'])->get('add_gun', [GunController::class, 'create'])->name('add_gun');
Route::middleware(['auth:sanctum', 'verified'])->get('ispis', [GunController::class, 'ispisi'])->name('ispis');

Route::middleware(['auth:sanctum', 'verified'])->post('store_gun', [GunController::class, 'store'])->name('store_gun');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_gun', [GunController::class, 'destroy'])->name('delete_gun');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_gun', [GunController::class, 'edit'])->name('edit_gun');
Route::middleware(['auth:sanctum', 'verified'])->post('update_gun', [GunController::class, 'update'])->name('update_gun');

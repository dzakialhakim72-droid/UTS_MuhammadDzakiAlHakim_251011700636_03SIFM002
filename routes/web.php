<?php

use App\Http\Controllers\AccessoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AccessoryController::class, 'home'])->name('home');
Route::get('/produk', [AccessoryController::class, 'index'])->name('accessories.index');
Route::get('/produk/{id}', [AccessoryController::class, 'show'])->name('accessories.show');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\HotelController::class, 'index'])->name('index');

Route::prefix('cliente')->group(function () {
    Route::get('/cadastro', [App\Http\Controllers\ClienteController::class, 'cadastro'])->name('cadastro');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/show', [\App\Http\Controllers\IndexController::class, 'show'])->name('show');

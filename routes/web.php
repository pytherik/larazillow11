<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/show', [\App\Http\Controllers\IndexController::class, 'show'])->name('show');

Route::resource('listing', \App\Http\Controllers\ListingController::class);

Route::get('login', [\App\Http\Controllers\AuthController::class, 'create'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [\App\Http\Controllers\AuthController::class, 'destroy'])->name('logout');

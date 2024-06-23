<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;


Route::get('informasi', [ LandingController::class, 'informasi'])->name('landing.informasi');
Route::get('wisata', [ LandingController::class, 'wisata'])->name('landing.wisata');
Route::get('login', [ LandingController::class, 'login'])->name('dasboard.login');
Route::resource('/', LandingController::class);
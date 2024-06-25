<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


#landing
Route::get('/', function () {
    return view('landing.index');
})->name('landing.index');
// Route::get('informasi', [ LandingController::class, 'informasi'])->name('landing.informasi');
// Route::get('wisata', [ LandingController::class, 'wisata'])->name('landing.wisata');
// Route::get('login', [ LandingController::class, 'login'])->name('dasboard.login');
// Route::resource('/', LandingController::class);

#dashboard
Route::get('/dashboard', function () {
    return view('dashboard.berandalogin');
})->name('dashboard.berandalogin');
// Route::get('/menujuindonesia', [DashboardController::class, 'menujuIndonesia'])->name('dashboard.menujuindonesia');
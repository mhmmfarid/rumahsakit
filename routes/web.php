<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PetugasDashboardController;

Route::get('/', [PostController::class, 'landing'])->name('home');

Route::redirect('/login', '/admin/login')->name('login');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout')->middleware('auth');

// Petugas dashboard (protected)
Route::get('/petugas/dashboard', [PetugasDashboardController::class, 'index'])
    ->name('petugas.dashboard')
    ->middleware(['auth']);

Route::prefix('artikel-kesehatan')
    ->name('artikel-kesehatan.')
    ->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/{post:slug}', [PostController::class, 'show'])->name('show');
    });

<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
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

// Halaman Layanan Kesehatan
Route::get('/layanan', [PageController::class, 'serviceIndex'])->name('layanan.index');
Route::get('/layanan/{slug}', [PageController::class, 'serviceShow'])->name('layanan.show');

// Halaman Pusat Unggulan
Route::get('/unggulan', [PageController::class, 'centerIndex'])->name('unggulan.index');
Route::get('/unggulan/{slug}', [PageController::class, 'centerShow'])->name('unggulan.show');

// Halaman Informasi
Route::get('/tentang-kami', [PageController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

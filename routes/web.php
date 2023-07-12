<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NavigationController;







Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware(['auth', 'admin'])->group(function () {
    // Routes untuk admin

    Route::get('/admin/dashboard', function () {
        // Tampilkan halaman admin dashboard
    });
});

Route::middleware('auth')->group(function () {
    // Routes untuk pengguna (user)

    Route::get('/dashboard', function () {
        // Tampilkan halaman dashboard pengguna
    });

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile.update');
});

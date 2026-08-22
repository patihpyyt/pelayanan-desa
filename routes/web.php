<?php

use App\Http\Controllers\Warga\DashboardController as WargaDashboardController;
use App\Http\Controllers\Warga\ProfilController;
use App\Http\Controllers\Petugas\DashboardController as PetugasDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pelayanan');
});

// petugas
Route::middleware(['auth'])->group(function () {

    Route::get('/petugas/dashboard', [PetugasDashboardController::class, 'index'])
        ->name('petugas.dashboard');

});

// warga
Route::middleware(['auth', 'warga'])
    ->prefix('warga')
    ->name('warga.')
    ->group(function () {

        Route::get('/dashboard', [WargaDashboardController::class, 'index'])
            // ->middleware('data.diri')
            ->name('dashboard');

        Route::get('/profil', [ProfilController::class, 'edit'])
            ->name('profil');

        Route::put('/profil', [ProfilController::class, 'update'])
            ->name('profil.update');
    });

// dashboard generik: cuma jadi "router" berdasarkan role, redirect ke dashboard masing-masing
Route::get('/dashboard', function () {
    $user = auth()->user();

    return match ($user->role) {
        'warga'   => redirect()->route('warga.dashboard'),
        'petugas' => redirect()->route('petugas.dashboard'),
        // tambahin kepala_desa / admin kalau nanti udah ada dashboard-nya
        default   => view('dashboard'),
    };
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
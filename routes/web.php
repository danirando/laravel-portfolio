<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rotta per la home page
Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Rotte per la gestione del profilo utente
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rotte dell'area amministrativa, protette da middleware 'auth' e 'verified'
Route::middleware(['auth', 'verified'])
    ->prefix('admin')             // tutte le rotte inizieranno con /admin
    ->name('admin.')              // tutte le rotte avranno il nome che inizia con admin.
    ->group(function () {
        // /admin/index
        Route::get('/index', [DashboardController::class, 'index'])->name('index');

        // /admin/profile
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    });

Route::resource('projects', ProjectController::class)->middleware(['auth', 'verified']);

// Rotte di autenticazione (login, registrazione, password reset, ecc.)
require __DIR__.'/auth.php';

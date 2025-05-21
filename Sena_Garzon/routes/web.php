<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Instructor-specific routes
Route::middleware(['auth', 'role:instructor'])->group(function () {
    Route::prefix('instructor/cursos')->group(function () {
        Route::get('/', [CursoController::class, 'index'])->name('cursos.index');
        Route::get('/crear', [CursoController::class, 'create'])->name('cursos.create');
        Route::post('/', [CursoController::class, 'store'])->name('cursos.store');
    });
});

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';
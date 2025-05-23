<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AprendizController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/', function () {
    return view('welcome');
});

// Rutas autenticadas y verificadas
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard (puedes eliminar esto si ya no usas dashboard.blade.php)
    Route::get('/dashboard', function () {
        return redirect()->route('aprendiz.inicio');
    })->name('dashboard');

    // Rutas de perfil
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    // Rutas para aprendices
    Route::prefix('aprendiz')->name('aprendiz.')->group(function () {
        Route::get('/', function () {
            return view('aprendiz.inicio');
        })->name('inicio');

        Route::get('/cursos', [AprendizController::class, 'cursos'])->name('cursos');
        Route::get('/mis-cursos', [AprendizController::class, 'misCursos'])->name('mis-cursos');
        Route::get('/certificados', function () {
            return view('aprendiz.certificados');
        })->name('certificados');
        Route::get('/horarios', function () {
            return view('aprendiz.horarios');
        })->name('horarios');
    });

    // Rutas para instructores
    Route::middleware(['role:instructor'])->prefix('instructor')->name('instructor.')->group(function () {
        Route::prefix('cursos')->name('cursos.')->group(function () {
            Route::get('/', [CursoController::class, 'index'])->name('index');
            Route::get('/crear', [CursoController::class, 'create'])->name('create');
            Route::post('/', [CursoController::class, 'store'])->name('store');
        });
    });

    // Ruta de cursos principal (si es genérica o para admin/instructor)
    Route::get('/cursos', [CursoController::class, 'index'])->name('cursos.index');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\AgregarEstudiantesComponent;
use App\Livewire\AsignaturasComponent;
use App\Livewire\EditarAsignaturasComponent;
use App\Livewire\EditarEstudiantesComponent;
use App\Livewire\EstudiantesComponent;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Rutas de navegacion de la aplicacion
Route::middleware('auth')->group(function () {
Route::get('/estudiantes', EstudiantesComponent::class )->name('estudiantes');
Route::get('/asignaturas', AsignaturasComponent::class )->name('asignaturas');
Route::get('/estudiantes/agregar', AgregarEstudiantesComponent::class)->name('estudiantes.agregar');
Route::get('/estudiantes/editar/{id}', EditarEstudiantesComponent::class)->name('estudiantes.editar');
Route::get('/asignaturas/editar/{id}', EditarAsignaturasComponent::class)->name('asignaturas.editar');
Route::post('/estudiantes/agregar', [\App\Http\Controllers\EstudiantesController::class, 'guardar'])->name('estudiantes.guardar');
Route::post('/asignaturas', [\App\Http\Controllers\AsignaturasController::class, 'guardar'])->name('asignaturas.guardar');
});





require __DIR__.'/auth.php';

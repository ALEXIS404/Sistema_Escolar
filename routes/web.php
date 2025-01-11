<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\AgregarEstudiantesComponent;
use App\Livewire\AgregarMatriculasComponent;
use App\Livewire\AsignaturasComponent;
use App\Livewire\AsistenciasComponent;
use App\Livewire\EditarAsignaturasComponent;
use App\Livewire\EditarAsistenciasComponent;
use App\Livewire\EditarEstudiantesComponent;
use App\Livewire\EditarMatriculasComponent;

use App\Livewire\EstudiantesComponent;
use App\Livewire\MatriculasComponent;
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
Route::get('/matriculas', MatriculasComponent::class )->name('matriculas');
Route::get('/asistencias', AsistenciasComponent::class )->name('asistencias');


Route::get('/estudiantes/agregar', AgregarEstudiantesComponent::class)->name('estudiantes.agregar');
Route::get('/matriculas/agregar', AgregarMatriculasComponent::class)->name('matriculas.agregar');


Route::get('/estudiantes/editar/{id}', EditarEstudiantesComponent::class)->name('estudiantes.editar');
Route::get('/asignaturas/editar/{id}', EditarAsignaturasComponent::class)->name('asignaturas.editar');
Route::get('/asistencias/editar/{id}', EditarAsistenciasComponent::class)->name('asistencias.editar');



Route::post('/estudiantes/agregar', [\App\Http\Controllers\EstudiantesController::class, 'guardar'])->name('estudiantes.guardar');
Route::post('/asignaturas', [\App\Http\Controllers\AsignaturasController::class, 'guardar'])->name('asignaturas.guardar');
Route::post('/asistencias', [\App\Http\Controllers\AsistenciasController::class, 'guardar'])->name('asistencias.guardar');
Route::post('/matriculas/agregar', [\App\Http\Controllers\MatriculasController::class, 'guardar'])->name('matriculas.guardar');
});





require __DIR__.'/auth.php';

<?php

use App\Http\Livewire\EstudianteForm;
use App\Http\Controllers\ProfileController;
//use App\Http\Livewire\AgregarEstudiantesComponent;
//use App\Livewire\EstudiantesComponent;
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


Route::get('/estudiante/form', EstudianteForm::class)->name('estudiante.form');


});


require __DIR__.'/auth.php';

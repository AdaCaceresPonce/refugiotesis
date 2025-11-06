<?php
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/us', function () {
    return view('us');
});

Route::get('/actividades', [ActividadController::class, 'index'])->name('actividades.index');
Route::get('/actividades/create', [ActividadController::class, 'create'])->name('actividades.create');
Route::post('/actividades', [ActividadController::class, 'store'])->name('actividades.store');
Route::get('/actividades/{actividad}', [ActividadController::class, 'show'])->name('actividades.show');

// Listado de animales
Route::get('/adoption', [AnimalController::class, 'index'])->name('adoption');

// Detalle de un animal
Route::get('/animales/{animal}', [AnimalController::class, 'show'])->name('animales.show');
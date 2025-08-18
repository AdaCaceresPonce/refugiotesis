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

Route::get('/activities', function () {
    return view('activities');
});
// MAL: devuelve la vista sin datos
// Route::get('/actividades', function () {
//     return view('actividades.index');
// });

Route::get('/actividades', [ActividadController::class, 'index'])->name('actividades.index');
Route::get('/actividades/crear', [ActividadController::class, 'create'])->name('actividades.create');
Route::post('/actividades', [ActividadController::class, 'store'])->name('actividades.store');
Route::get('/actividades/{actividad}', [ActividadController::class, 'show'])->name('actividades.show');


// Route::get('/adoption', [AnimalController::class, 'index'])->name('adoption');
// Route::get('/adoption', function () {
//     return view('adoption');
// });
// Route::get('/adoption', function () {
//     $animales = [
//         ['id' => 1, 'nombre' => 'Max', 'tipo' => 'Perro'],
//         ['id' => 2, 'nombre' => 'Mia', 'tipo' => 'Gato'],
//     ];
//     return view('adoption', compact('animales'));
// });

// Listado de animales
Route::get('/adoption', [AnimalController::class, 'index'])->name('adoption');

// Detalle de un animal
Route::get('/animales/{animal}', [AnimalController::class, 'show'])->name('animales.show');
<?php
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/us', function () {
    return view('us');
});


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
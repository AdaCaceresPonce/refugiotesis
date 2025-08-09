<?php

namespace App\Http\Controllers;
use App\Models\Animal; 
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        // Datos de ejemplo, reemplazar  por consulta a la base de datos
        // $animales = [
        //     ['id' => 1, 'nombre' => 'Max', 'tipo' => 'Perro', 'categoria' => 'En adopción', 'sexo' => 'Macho', 'descripcion' => 'Cariñoso y juguetón', 'imagen' => 'perros/max.jpg'],
        //     ['id' => 2, 'nombre' => 'Mia', 'tipo' => 'Gato', 'categoria' => 'En adopción', 'sexo' => 'Hembra', 'descripcion' => 'Tranquila y amorosa', 'imagen' => 'gatos/mia.jpg'],
        // ];

        // return view('adoption', compact('animales'));
    }
    
}

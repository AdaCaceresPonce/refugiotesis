<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class ActividadController extends Controller
{
    public function index()
    {
        // $actividades = Actividad::orderBy('fecha', 'asc')->paginate(6);
        // return view('actividades.index', compact('actividades'));
        $actividades = Actividad::orderBy('fecha', 'asc')->paginate(6);
        return view('actividades.index', compact('actividades'));
    }

    public function show(Actividad $actividad)
    {
        return view('actividades.show', compact('actividad'));
    }
    public function create()
{
    return view('actividades.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'fecha' => 'nullable|date',
    ]);

    if ($request->hasFile('imagen')) {
        $validated['imagen'] = $request->file('imagen')->store('actividades', 'public');
    }

    Actividad::create($validated);

    return redirect()->route('actividades.index')->with('success', 'Actividad creada correctamente.');
}

}

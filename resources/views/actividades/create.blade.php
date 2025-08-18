
@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white shadow rounded-lg">
    <h1 class="text-2xl font-bold mb-6">Crear nueva actividad</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('actividades.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold mb-1">Título</label>
            <input type="text" name="titulo" value="{{ old('titulo') }}" required
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
        </div>

        <div>
            <label class="block font-semibold mb-1">Descripción</label>
            <textarea name="descripcion" rows="4" required
                      class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">{{ old('descripcion') }}</textarea>
        </div>

        <div>
            <label class="block font-semibold mb-1">Fecha de la actividad</label>
            <input type="date" name="fecha" value="{{ old('fecha') }}"
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
        </div>

        <div>
            <label class="block font-semibold mb-1">Imagen (opcional)</label>
            <input type="file" name="imagen" accept="image/*"
                   class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
        </div>

        <div class="pt-4">
            <button type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                Guardar actividad
            </button>
            <a href="{{ route('actividades.index') }}" class="ml-3 text-gray-600 hover:underline">Cancelar</a>
        </div>
    </form>
</div>
@endsection
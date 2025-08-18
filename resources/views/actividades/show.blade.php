 {{-- Header --}}
@include('partials.header')

@section('content')
<div class="max-w-4xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $actividad->titulo }}</h1>
    <img src="{{ asset('storage/' . $actividad->imagen) }}" class="w-full rounded mb-4">
    <p class="text-gray-700 mb-4">{{ $actividad->descripcion }}</p>
    <a href="{{ route('actividades.index') }}" class="text-indigo-600 hover:underline">← Volver a actividades</a>
</div>
@endsection
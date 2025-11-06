<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="min-h-screen flex flex-col">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Refugio Patitas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none; }
    </style>
</head>
<body class="flex flex-col min-h-screen font-sans">

    {{-- Header --}}
    @include('partials.header')
     <!-- Banner de sección -->
     {{-- <section class="relative h-64 w-full bg-cover bg-center"
     style="background-image: url('{{ asset('img/adoption/banner_2_adopciones_2.jpg') }}');">
    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 flex flex-col items-end justify-center h-full px-6 md:px-16">
        <h1 class="text-white text-3xl md:text-5xl font-bold text-right">Actividades</h1>
    </div>
    </section>
    <section class="max-w-6xl mx-auto p-4">
        <!-- Título -->
        <h2 class="text-lg font-semibold mb-4">Revisa nuestras actividades programadas:</h2>
    
        <!-- Buscador -->
        <div class="relative mb-6">
            <input type="text" placeholder="Escribe lo que desees buscar"
                class="w-full rounded-full border border-gray-300 pl-4 pr-12 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <button class="absolute right-3 top-2.5 text-gray-500 hover:text-indigo-600">
                🔍
            </button>
        </div>
    
        <!-- Paginación -->
        <div class="mb-6">
            {{ $actividades->links() }}
        </div>
    
        <!-- Lista de actividades -->
        <div class="space-y-6">
            @foreach ($actividades as $actividad)
                <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col md:flex-row">
                    <!-- Imagen -->
                    <div class="relative md:w-1/3">
                        <img src="{{ asset('storage/' . $actividad->imagen) }}" alt="{{ $actividad->titulo }}"
                            class="w-full h-48 md:h-full object-cover">
                        @if ($actividad->fecha)
                            @php
                                $diasRestantes = \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($actividad->fecha), false);
                            @endphp
                            @if ($diasRestantes > 0)
                                <span class="absolute bottom-3 left-3 bg-blue-600 text-white px-3 py-1 rounded-full text-sm">
                                    En {{ $diasRestantes }} días
                                </span>
                            @elseif ($diasRestantes === 0)
                                <span class="absolute bottom-3 left-3 bg-green-600 text-white px-3 py-1 rounded-full text-sm">
                                    Hoy
                                </span>
                            @else
                                <span class="absolute bottom-3 left-3 bg-gray-600 text-white px-3 py-1 rounded-full text-sm">
                                    Finalizado
                                </span>
                            @endif
                        @endif
                    </div>
    
                    <!-- Contenido -->
                    <div class="p-4 flex flex-col justify-between flex-1">
                        <!-- Título -->
                        <h3 class="text-lg font-semibold">{{ $actividad->titulo }}</h3>
                        <!-- Meta -->
                        <div class="flex items-center text-gray-500 text-sm gap-4 mt-1">
                            <span>Publicado el {{ $actividad->created_at->format('d/m/Y') }}</span>
                            <span>{{ $actividad->comentarios_count ?? 0 }} 💬</span>
                            <span>{{ $actividad->likes_count ?? 0 }} ❤️</span>
                        </div>
                        <!-- Descripción -->
                        <p class="mt-2 text-gray-700 text-sm">
                            {{ $actividad->descripcion }}
                        </p>
                        <!-- Botón -->
                        <div class="mt-4">
                            <a href="{{ route('actividades.show', $actividad) }}"
                                class="text-indigo-600 font-semibold hover:underline flex items-center gap-1">
                                VER DETALLES →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section> --}}
    @section('content')
        <h1 class="text-2xl font-bold mb-4">Listado de Actividades</h1>

        @if(session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($actividades as $actividad)
                <div class="p-4 border rounded bg-white shadow">
                    <h2 class="text-xl font-semibold">{{ $actividad->titulo }}</h2>
                    <p>{{ $actividad->descripcion }}</p>
                    <p class="text-sm text-gray-500">📅 {{ $actividad->fecha }}</p>
                    <a href="{{ route('actividades.show', $actividad) }}" class="text-blue-500">Ver más</a>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $actividades->links() }}
        </div>
    @endsection

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>
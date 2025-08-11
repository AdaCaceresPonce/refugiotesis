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
    <section class="relative h-64 w-full bg-cover bg-center" style="background-image: url('{{ asset('img/us/us_fondo.jpg') }}');">
        <!-- Capa oscura -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Contenido -->
        <div class="relative z-10 flex items-center justify-end h-full px-6 md:px-16">
            <h1 class="text-white text-3xl md:text-5xl font-bold text-right">Sobre Nosotros</h1>
        </div>
    </section>

    <section class="bg-gray-100 py-16 px-6 md:px-20">
        <!-- Encabezado -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-cyan-900">Nuestra Historia</h2>
        </div>
    
        <!-- Contenido principal -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-12">
            <!-- Imagen/ilustración izquierda -->
            <div class="flex-shrink-0 w-60 h-60">
                <img src="{{ asset('img/us/perrito_cartelito_us_sinfondo.jpg') }}" alt="Perrito Logo" class="w-full h-full object-contain">
            </div>

            <!-- Texto centrado -->
            <div class="text-center md:text-left max-w-xl">
                <p class="text-gray-700 text-lg leading-relaxed">
                    Somos <span class="text-blue-600 font-semibold">Refugio Patitas del Sur</span>, una organización sin fines de lucro ubicada en la ciudad de Chincha.
                    <br><br>
                    Buscamos ayudar a las mascotas en situación de calle, los rescatamos y cuidamos para poder conseguirles una segunda oportunidad de encontrar una familia que los ame y un hogar en el que estén felices y seguros.
                </p>
            </div>

            <!-- Imagen circular derecha -->
            <div class="w-60 h-60 rounded-full border-4 border-cyan-400 overflow-hidden flex-shrink-0">
                <img src="{{ asset('img/us/fondo_3.jpg') }}" alt="Perros del refugio" class="w-full h-full object-cover">
            </div>
        </div>

    </section>
    <section class="px-4 py-8 md:px-10 max-w-6xl mx-auto bg-white">
        <div class="flex flex-col md:flex-row items-start justify-between gap-10">
      
          <!-- Galería de imágenes estilo collage -->
          <div class="grid grid-cols-2 grid-rows-2 gap-4 w-full md:w-1/2">
            <!-- Imagen 1 -->
            <div class="border-4 border-cyan-400 rounded overflow-hidden h-64">
              <img src="{{ asset('img/us/fondo_3.jpg') }}" alt="Perro en refugio" class="w-full h-full object-cover">
            </div>
            <!-- Imagen 2 -->
            <div class="border-4 border-cyan-400 rounded overflow-hidden h-52">
              <img src="{{ asset('img/us/fondo_3.jpg') }}" alt="Perro en refugio" class="w-full h-full object-cover">
            </div>
            <!-- Imagen 3 -->
            <div class="border-4 border-cyan-400 rounded overflow-hidden h-48">
              <img src="{{ asset('img/us/fondo_3.jpg') }}" alt="Perro en refugio" class="w-full h-full object-cover">
            </div>
            <!-- Imagen 4 -->
            <div class="border-4 border-cyan-400 rounded overflow-hidden h-64">
              <img src="{{ asset('img/us/fondo_3.jpg') }}" alt="Perro en refugio" class="w-full h-full object-cover">
            </div>
          </div>
      
          <!-- Texto a la derecha -->
          <div class="w-full md:w-1/2 max-w-xl">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Mision</h2>
            <p class="text-gray-700 text-justify leading-relaxed text-base">
              Refugio Patitas del Sur se fundó con la misión de rescatar, proteger y brindar una segunda oportunidad a los animales en situación de abandono. 
              <br><br>
              Gracias al esfuerzo de nuestros voluntarios, hemos logrado transformar la vida de decenas de mascotas, dándoles el amor y hogar que merecen. Nuestra historia continúa con tu apoyo.
            </p>
          </div>
      
        </div>
      </section>
      
      
      
      
      
    
       
    {{-- Mision --}}
    @include('mision.mision')
    <!-- Main -->
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>

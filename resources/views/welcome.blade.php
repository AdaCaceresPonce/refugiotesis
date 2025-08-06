<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Refugio Patitas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS (ya sea por CDN o Vite) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body class="font-sans">

    @include('partials.header')

        <section class="flex flex-col md:flex-row items-center justify-center gap-10 px-6 py-10 ">
            <!-- Imagen circular -->
            <div class="w-96 h-96 rounded-full overflow-hidden border-4 border-cyan-400 shadow-md">
                <img src="{{ asset('img/section_one/portada_refugio.jpg') }}" alt="Refugio Patitas" class="w-full h-full object-cover">
            </div>

            <!-- Texto y botón -->
            <div class="max-w-md text-center md:text-left">
                <p class="text-cyan-500 font-semibold uppercase text-sm mb-1">Te damos la bienvenida al</p>
                <h2 class="text-2xl md:text-3xl font-extrabold mb-4 text-center md:text-left animate-color-change">
                    Refugio Patitas del Sur <br class="hidden md:block" /> (Chincha)
                </h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                Este proyecto nace con la esperanza de poder ayudar a nuestros hermanos pequeños de la calle, dándoles una
                <span class="font-bold">segunda oportunidad de vivir y de conocer el amor.</span>
                </p>
                <a href="#" class="inline-flex items-center bg-cyan-500 text-white px-5 py-2 rounded-md font-semibold hover:bg-cyan-600 transition">
                Conoce más
                <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        </section>
        {{-- segundo item --}}
        <section class="max-w-7xl mx-auto px-6 py-12 text-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Card 1 ejemplo -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg hover:ring-2 hover:ring-cyan-400">
                  <img src="img/section_two/rescate_proteccion.jpg" alt="Rescate" class="w-16 mx-auto mb-4">
                  <h3 class="text-lg font-semibold mb-2">Rescate y Protección</h3>
                  <p class="text-gray-600 text-sm">Brindar refugio seguro a animales en peligro, protegiéndolos de daños adicionales.</p>
                </div>
                <!-- Card 2 ejemplo -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg hover:ring-2 hover:ring-cyan-400">
                    <img src="img/section_two/cuidado_rehabilitacion.jpg" alt="Rescate" class="w-16 mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Cuidado y Rehabilitación</h3>
                    <p class="text-gray-600 text-sm">Proporcionar atención veterinaria y emocional para mejorar su bienestar.</p>
                </div>
                <!-- Card 3 ejemplo -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg hover:ring-2 hover:ring-cyan-400">
                    <img src="img/section_two/promociones.jpg" alt="Rescate" class="w-16 mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Promoción de la Adopción</h3>
                    <p class="text-gray-600 text-sm">Facilitar adopciones responsables para encontrarles hogares permanentes.</p>
                </div>
                <!-- Card 4 ejemplo -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center transform transition duration-300 hover:scale-105 hover:shadow-lg hover:ring-2 hover:ring-cyan-400">
                    <img src="img/section_two/educacion.jpg" alt="Rescate" class="w-16 mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Educación y Concienciación</h3>
                    <p class="text-gray-600 text-sm">Promover la conciencia sobre el bienestar animal y la responsabilidad de ser dueños de mascotas.</p>
                </div>
        </section>

        <!-- Texto Superior -->
        <section style="background: linear-gradient(180deg, #30D1F5 0%, #30D1F5 40%, #ffffff 100%);">
            <section class="max-w-2xl mx-auto text-center text-white font-bold text-base sm:text-lg md:text-xl p-4 sm:p-6 ">
                <p>
                    Necesitamos del apoyo incondicional tuyo o de los que deseen sumarse a este sueño en la Provincia de Chincha y sigamos con esta labor en favor de ellos.
                </p>
                <em class="block text-white mt-2 text-sm sm:text-base">"Los que hablan solo con una mirada"</em>
            </section>
            <!-- Banner Principal con Imagen -->
            <section class="relative max-w-4xl mx-auto mt-4 rounded-xl overflow-hidden shadow-lg ">
                <!-- Imagen de fondo -->
                <img src="img/section_three/unete.png" alt="Banner" class="w-full h-64 object-cover">
            </section>
        </section>

        <!-- Sección Voluntariado -->
        <section class="flex flex-col-reverse md:flex-row items-center justify-center text-center md:text-left mt-8 max-w-4xl mx-auto gap-6 p-4 mb-8">
            <!-- Texto y botón -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-xl font-bold mb-4">¿Estás interesado? <br class="hidden md:block">Postula para el voluntariado</h3>
                    <a href="#" class="inline-block bg-black text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-800 transition">
                        Más información
                    </a>
            </div>
            <!-- Imagen -->
            <img src="img/section_three/atencion-animales.jpg" alt="Mascota" class="w-40 md:w-48 rounded-lg">
        </section>

        <section class="bg-gradient-to-b from-white to-cyan-100 text-center py-12 px-4">
            <p class="text-sm text-cyan-600 font-semibold uppercase">Ellos esperan por ti</p>
            <h1 class="text-2xl font-bold mt-2 mb-8">No compres uno de raza, mejor adopta uno sin casa.</h1>
          
                <!-- Carrusel contenedor -->
                <div class="overflow-hidden max-w-6xl mx-auto">
                <div id="carouselTrack" class="flex transition-transform duration-700 ease-in-out">
                    
                    <!-- Grupo 1 -->
                    <div class="grid grid-cols-2 md:flex w-full flex-shrink-0 justify-center gap-6 place-items-center">
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/perrito_mirada.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Firulais V</p>
                    </div>
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/loreta.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Loreta</p>
                    </div>
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/emma.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Emma</p>
                    </div>
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/pablo.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Pablo</p>
                    </div>
                    </div>
            
                    <!-- Grupo 2 -->
                    <div class="grid grid-cols-2 md:flex w-full flex-shrink-0 justify-center gap-6 place-items-center">
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/perrito_mirada.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Firulais V</p>
                    </div>
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/loreta.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Loreta</p>
                    </div>
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/emma.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Emma</p>
                    </div>
                    <div class="w-40 flex flex-col items-center">
                        <img src="img/section_four/pablo.jpg" class="w-40 h-40 object-cover rounded-xl shadow-md" />
                        <p class="mt-2 font-medium">Pablo</p>
                    </div>
                    </div>
                </div>
            </div>
            <button class="mt-8 bg-cyan-500 text-white px-6 py-2 rounded-full hover:bg-cyan-600 transition">
            Conoce a más →
            </button>
        </section>
        <section class="py-16 px-4 max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                    <!-- Texto -->
                    <div>
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Con tu ayuda podemos más</h2>
                        <p class="text-gray-700 mb-6">
                        Necesitamos del apoyo incondicional tuyo o de los que deseen sumarse a este sueño en la Provincia de Chincha y sigamos con esta labor en favor de ellos.
                        </p>
                        <a href="#" class="text-purple-600 font-semibold hover:underline inline-flex items-center">
                        CONOCE MÁS
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                        </a>
                    </div>
                    <!-- Imagen -->
                    <div class="flex justify-center">
                        <img src="img/section_five/help_refugio.jpg" alt="Ayúdanos a ayudar" class="rounded-xl shadow-lg max-w-full" />
                    </div>
                </div>
        </section>
    
    @include('partials.footer')  
</body>
</html>
<!-- Script para menú móvil -->
<script>
  const toggleBtn = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  toggleBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

//   carrusel
  const track = document.getElementById('carouselTrack');
  let index = 0;
  const totalSlides = 2;

  setInterval(() => {
    index = (index + 1) % totalSlides;
    track.style.transform = `translateX(-${index * 100}%)`;
  }, 4000); // cambia cada 4 segundos
  

</script>
<style>
/* cambiar de color */
    @keyframes colorChange {
        0%   { color: #d42f06; }  
        25%  { color: #220349; }  
        50%  { color: #166906; }  
        75%  { color: #32164d; }  
        100% { color: #045c6b; }
    }

    .animate-color-change {
        animation: colorChange 5s linear infinite;
    }
</style>
   
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

    <!-- Encabezado completo -->
    <header class="text-white">

        <!-- Barra superior -->
        <div style="background-color: #091D63;">
            <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-3 text-sm space-y-4 md:space-y-0">
                <div class="flex items-center justify-center md:justify-start gap-4">
                    <img src="{{ asset('img/section_one/fondo_huellita_azul.png') }}" alt="Logo Patitas" class="h-20">
                </div>
                <div class="flex flex-col md:flex-row items-center justify-center gap-2 text-white text-center md:text-left">
                    <p>refugiopatitasdelsurchincha@gmail.com</p>
                    <span class="hidden md:block">|</span>
                    <p>999-693-963</p>
                </div>
                <div class="flex justify-center gap-3 text-white">
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Menú principal -->
        <nav style="background-color:#2690FC;">
            <div class="max-w-screen-xl mx-auto px-4 py-3 flex justify-between items-center">
                <!-- Logo  -->
                <div class="flex items-center gap-3 text-white font-bold text-lg">
                    <img src="{{ asset('img/section_one/nombre-patita-sur.jpg') }}" alt="RPS" class="h-8">
                </div>
                <!-- Botón hamburguesa móvil -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white focus:outline-none text-xl">
                    <i class="fas fa-bars"></i>
                    </button>
                </div>
                <!-- Enlaces y botones en escritorio -->
                <div class="hidden md:flex md:items-center md:gap-6 ml-10 w-full justify-between">
                    <!-- Enlaces -->
                    <ul class="flex gap-4 text-white font-medium text-sm">
                        <li><a href="" class="pb-1 transition {{ request()->path() == 'inicio' ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Inicio</a></li>
                        <li><a href="" class="pb-1 transition {{ request()->is('nosotros') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Nosotros</a></li>
                        <li><a href="" class="pb-1 transition {{ request()->is('adopcion') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Adopción</a></li>
                        <li><a href="" class="pb-1 transition {{ request()->is('voluntariado') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Voluntariado</a></li>
                        <li><a href="" class="pb-1 transition {{ request()->is('actividades') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Actividades</a></li>
                        <li><a href="" class="pb-1 transition {{ request()->is('contacto') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Contacto</a></li>
                    </ul>

                    <!-- Botones sesión -->
                    <div class="flex gap-3">
                        <a href="#" class="bg-white text-blue-700 px-5 py-1 rounded-md text-sm hover:bg-blue-100 font-bold">Inicia Sesión</a>
                        <a href="#" class="bg-blue-800 text-white px-5 py-1 rounded-md text-sm hover:bg-blue-900 font-bold">Regístrate</a>
                    </div>
                </div>
            </div>
                <!-- Menú móvil oculto por defecto -->
            <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-4 ">
                <ul class="space-y-2 text-white font-medium  text-sm">
                    <li><a href="" class="block">Inicio</a></li>
                    <li><a href="" class="block">Nosotros</a></li>
                    <li><a href="" class="block">Adopción</a></li>
                    <li><a href="" class="block">Voluntariado</a></li>
                    <li><a href="" class="block">Actividades</a></li>
                    <li><a href="" class="block">Contacto</a></li>
                </ul>
                <div class="flex flex-col gap-2">
                    <a href="#" class="bg-white text-blue-700 px-5 py-2 rounded-md text-sm font-bold text-center">Inicia Sesión</a>
                    <a href="#" class="bg-blue-800 text-white px-5 py-2 rounded-md text-sm font-bold text-center">Regístrate</a>
                </div>
            </div>
        </nav>
    </header>

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
    
        <!-- Footer -->
        <footer style="background-color: #091D63;">
            <div class="max-w-screen-xl mx-auto px-4 py-10 text-white color:#091D63">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
              
                <!-- Logo y descripción -->
                    <div class="flex flex-col items-center md:items-start">
                        <img src="img/section_six/nombre-patita-sur-fondo-azul.png" alt="Logo" class="w-60 mb-4">
                        <p class="text-sm leading-6 mb-4">
                        Este proyecto nace con la esperanza de poder ayudar a nuestros hermanos pequeños de la calle, 
                        dándoles una SEGUNDA OPORTUNIDAD DE VIVIR Y DE CONOCER EL AMOR.
                        </p>
                        <div class="flex space-x-4 text-xl">
                        <a href="#" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-400"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="hover:text-gray-400"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-400"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
              
                <!-- Quick Links -->
                    <div class="flex flex-col items-center md:items-start">
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">Portfolio</a></li>
                        <li><a href="#" class="hover:underline">Blogs</a></li>
                        <li><a href="#" class="hover:underline">About</a></li>
                        <li><a href="#" class="hover:underline">Press</a></li>
                        <li><a href="#" class="hover:underline">Careers <span class="text-teal-400">we’re hiring</span></a></li>
                        </ul>
                    </div>
              
                <!-- Contacto -->
                    <div class="flex flex-col items-center md:items-start">
                        <h3 class="text-lg font-semibold mb-4">Reach us</h3>
                        <ul class="space-y-3 text-sm">
                        <li class="flex items-center justify-center md:justify-start space-x-2">
                            <span>📧</span>
                            <a href="mailto:hello@landify.co" class="hover:underline">hello@landify.co</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start space-x-2">
                            <span>📱</span>
                            <a href="tel:+919876543210" class="hover:underline">+91 98765 43210</a>
                        </li>
                        <li class="flex items-center justify-center md:justify-start space-x-2 text-center md:text-left">
                            <span>📍</span>
                            <span>772 Lynwood Ave, Walnut, CA 91789</span>
                        </li>
                        </ul>
                    </div>
              
                <!-- Galería de Adoptados -->
                    <div class="flex flex-col items-center md:items-start">
                        <h3 class="text-lg font-semibold mb-4">Nuestros Adoptados</h3>
                        <div class="grid grid-cols-4 gap-2 justify-center">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        <img src="img/section_six/loreta.jpg" class="w-20 h-20 object-cover rounded">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Línea inferior -->
            <div class="mt-8 border-t border-blue-700 pt-4 text-sm text-white">
                <div class="max-w-screen-xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
                    <!-- Texto -->
                    <p class="text-center md:text-left">© 2020 Landify UI Kit. All rights reserved</p>
                
                    <!-- Enlaces -->
                    <div class="flex flex-wrap justify-center md:justify-end gap-4 px-2 py-2">
                        <a href="#" class="hover:underline">Terms & Conditions</a>
                        <a href="#" class="hover:underline">Privacy Policy</a>
                        <a href="#" class="hover:underline">Sitemap</a>
                        <a href="#" class="hover:underline">Disclaimer</a>
                    </div>
                </div>
            </div>
        </footer>
        
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

   
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
                    <li><a href="{{ url('/') }}" class="pb-1 transition {{ request()->path() == 'inicio' ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Inicio</a></li>
                    <li><a href="{{ url('/us') }}" class="pb-1 transition {{ request()->is('nosotros') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">Nosotros</a></li>
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
                <li><a href="{{ url('/') }}" class="block">Inicio</a></li>
                <li><a href="{{ url('/us') }}" class="block">Nosotros</a></li>
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
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
            <!-- Logo -->
            <div class="flex items-center gap-3 text-white font-bold text-lg">
                <img src="{{ asset('img/section_one/nombre-patita-sur.jpg') }}" alt="RPS" class="h-8">
            </div>

            <!-- Botón hamburguesa móvil -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none text-xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Menú escritorio -->
            <div class="hidden md:flex md:items-center md:gap-6 ml-10 w-full justify-between">
                <ul class="flex gap-4 text-white font-medium text-sm">
                    <li><a href="{{ url('/') }}" class="pb-1 hover:border-b-2 border-white">Inicio</a></li>
                    <li><a href="{{ url('/us') }}" class="pb-1 hover:border-b-2 border-white">Nosotros</a></li>
                    <li><a href="{{ url('/adoption') }}" class="pb-1 hover:border-b-2 border-white">Adopción</a></li>

                    <!-- Dropdown Comunidad -->
                    <li class="relative group">
                        <button class="group-hover:text-blue-600 flex items-center gap-1">
                            Comunidad <span class="transition-transform" id="arrow-comunidad">▼</span>
                        </button>
                        <ul class="absolute hidden group-hover:block bg-white text-black shadow-md p-2 rounded-md z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Actividades</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Se Busca</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Testimonios</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown Ayuda -->
                    <li class="relative group">
                        <button class="group-hover:text-blue-600 flex items-center gap-1">
                            Ayuda <span class="transition-transform" id="arrow-ayuda">▼</span>
                        </button>
                        <ul class="absolute hidden group-hover:block bg-white text-black shadow-md p-2 rounded-md z-50">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Voluntariado</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Donar</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Donar insumos</a></li>
                        </ul>
                    </li>

                    <li><a href="#" class="pb-1 hover:border-b-2 border-white">Contacto</a></li>
                </ul>

                <!-- Botones sesión -->
                <div class="flex gap-3">
                    <a href="#" class="bg-white text-blue-700 px-5 py-1 rounded-md text-sm hover:bg-blue-100 font-bold text-center ">Inicia Sesión</a>
                    <a href="#" class="bg-blue-800 text-white px-5 py-1 rounded-md text-sm hover:bg-blue-900 font-bold text-center ">Regístrate</a>
                </div>
            </div>
        </div>

        <!-- Menú móvil -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-4">
            <ul class="space-y-2 text-white font-medium text-sm">
                <li><a href="{{ url('/') }}" class="block">Inicio</a></li>
                <li><a href="{{ url('/us') }}" class="block">Nosotros</a></li>
                <li><a href="#" class="block">Adopción</a></li>

                <!-- Dropdown Comunidad -->
                <li>
                    <button onclick="toggleDropdown('comunidad')" class="flex justify-between w-full items-center">
                        Comunidad <span id="icon-comunidad">▼</span>
                    </button>
                    <ul id="dropdown-comunidad" class="pl-4 hidden space-y-1">
                        <li><a href="#">Actividades</a></li>
                        <li><a href="#">Se Busca</a></li>
                        <li><a href="#">Testimonios</a></li>
                    </ul>
                </li>

                <!-- Dropdown Ayuda -->
                <li>
                    <button onclick="toggleDropdown('ayuda')" class="flex justify-between w-full items-center">
                        Ayuda <span id="icon-ayuda">▼</span>
                    </button>
                    <ul id="dropdown-ayuda" class="pl-4 hidden space-y-1">
                        <li><a href="#">Voluntariado</a></li>
                        <li><a href="#">Donar</a></li>
                        <li><a href="#">Donar insumos</a></li>
                    </ul>
                </li>

                <li><a href="#" class="block">Contacto</a></li>
            </ul>

            <!-- Botones sesión -->
            <div class="flex flex-col gap-2">
                <a href="#" class="bg-white text-blue-700 px-5 py-2 rounded-md text-sm font-bold text-center">Inicia Sesión</a>
                <a href="#" class="bg-blue-800 text-white px-5 py-2 rounded-md text-sm font-bold text-center">Regístrate</a>
            </div>
        </div>
    </nav>
</header>

<!-- Script para menú móvil -->
<script>
    // Mostrar/ocultar menú móvil
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Abrir dropdowns móviles
    function toggleDropdown(id) {
        const content = document.getElementById('dropdown-' + id);
        const icon = document.getElementById('icon-' + id);
        const isHidden = content.classList.contains('hidden');
        content.classList.toggle('hidden');
        if (icon) {
            icon.textContent = isHidden ? '▲' : '▼';
        }
    }

    // Cambiar flechitas en escritorio
    window.onload = () => {
        const comunidadItem = document.querySelector('li.group:nth-child(4)');
        const ayudaItem = document.querySelector('li.group:nth-child(5)');

        comunidadItem.addEventListener('mouseenter', () => {
            document.getElementById('arrow-comunidad').textContent = '▲';
        });
        comunidadItem.addEventListener('mouseleave', () => {
            document.getElementById('arrow-comunidad').textContent = '▼';
        });

        ayudaItem.addEventListener('mouseenter', () => {
            document.getElementById('arrow-ayuda').textContent = '▲';
        });
        ayudaItem.addEventListener('mouseleave', () => {
            document.getElementById('arrow-ayuda').textContent = '▼';
        });
    };
</script>



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
            <div class="max-w-screen-xl mx-auto flex items-center justify-between px-10 py-4 text-sm">
                <div class="flex items-center gap-16">
                    <img src="{{ asset('img/fondo_huellita_azul.png') }}" alt="Logo Patitas" class="h-20">
                </div>
                <div class="flex justify-end items-center gap-4 text-white text-sm h-16 px-4">
                    <p>refugiopatitasdelsurchincha@gmail.com</p>
                    <span>|</span>
                    <p>999-693-963</p>
                </div>
                <div class="flex items-center gap-4 text-white">
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" class="bg-white/10 rounded-full p-2 hover:bg-white/20 transition">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Menú principal -->
        <nav style="background-color:#2690FC;">
            <div class="max-w-screen-xl mx-auto flex items-center justify-between px-4 py-3">
                <!-- Logo y nombre -->
                <div class="flex items-center gap-3 text-white font-bold text-lg">
                    <img src="{{ asset('img/nombre-patita-sur.jpg') }}" alt="RPS" class="h-8">
                    
                </div>

                <!-- Enlaces del menú -->
                <ul class="flex items-center gap-4 text-white font-medium text-sm">
                    <li>
                        <a href="" 
                        class="pb-1 transition {{ request()->path() == 'inicio'  ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">
                        Inicio
                        </a>
                    </li>
                    <li>
                        <a href="" 
                        class="pb-1 transition {{ request()->is('nosotros') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">
                        Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="" 
                        class="pb-1 transition {{ request()->is('adopcion') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">
                        Adopción
                        </a>
                    </li>
                    <li>
                        <a href="" 
                        class="pb-1 transition {{ request()->is('voluntariado') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">
                        Voluntariado
                        </a>
                    </li>
                    <li>
                        <a href="" 
                        class="pb-1 transition {{ request()->is('actividades') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">
                        Actividades
                        </a>
                    </li>
                    <li>
                        <a href="" 
                        class="pb-1 transition {{ request()->is('contacto') ? 'border-b-2 border-white' : 'hover:border-b-2 hover:border-white' }}">
                        Contacto
                        </a>
                    </li>
                </ul>


                <!-- Botones de sesión -->
                <div class="flex gap-3">
                    <a href="#" class="bg-white text-blue-700 px-5 py-1 rounded-md text-sm hover:bg-blue-100 font-bold">Inicia Sesión</a>
                    <a href="#" class="bg-blue-800 text-white px-5 py-1 rounded-md text-sm hover:bg-blue-900 font-bold">Regístrate</a>
                </div>
            </div>
        </nav>

    </header>

</body>
</html>

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
     <section class="relative h-64 w-full bg-cover bg-center" style="background-image: url('{{ asset('img/adoption/banner_2_adopciones_2.jpg') }}');">
         <!-- Capa oscura -->
         <div class="absolute inset-0 bg-black/40"></div>
 
         <!-- Contenido -->
         <div class="relative z-10 flex flex-col items-end justify-center h-full px-6 md:px-16">
            <h1 class="text-white text-3xl md:text-5xl font-bold text-right">
                Adopción
            </h1>
            <button class="mt-4 bg-cyan-500 text-white px-6 py-2 rounded-full hover:bg-cyan-600 transition">
                Requisitos para Adoptar
            </button>
        </div>
        
     </section>

            <div 
            x-data="{
                animales: @json($animales),
                filtroAnimal: '',
                filtroCategoria: '',
                filtroSexo: '',
                get filtrados() {
                    return this.animales.filter(a => {
                        let tipoOk = this.filtroAnimal ? a.tipo === this.filtroAnimal : true;
                        let categoriaOk = this.filtroCategoria ? a.categoria === this.filtroCategoria : true;
                        let sexoOk = this.filtroSexo ? a.sexo === this.filtroSexo : true;
                        return tipoOk && categoriaOk && sexoOk;
                    });
                },
                limpiarFiltros() {
                    this.filtroAnimal = '';
                    this.filtroCategoria = '';
                    this.filtroSexo = '';
                }
            }"
            class="flex flex-col md:flex-row max-w-screen-xl mx-auto px-4 py-8 gap-6"
        >
            {{-- SIDEBAR  --}}
            <aside class="w-full md:w-64 bg-white shadow-md rounded-lg p-4">
                <h2 class="text-lg font-bold flex items-center gap-2 mb-4">
                    Animales 🐾
                </h2>
                <ul class="space-y-2 mb-6">
                    <li><label class="flex items-center gap-2">
                        <input type="radio" name="animal" value="" x-model="filtroAnimal"> Todos
                    </label></li>
                    <li><label class="flex items-center gap-2">
                        <input type="radio" name="animal" value="Perro" x-model="filtroAnimal"> Perros (19)
                    </label></li>
                    <li><label class="flex items-center gap-2">
                        <input type="radio" name="animal" value="Gato" x-model="filtroAnimal"> Gatos (29)
                    </label></li>
                </ul>
        
                <h2 class="text-lg font-bold flex items-center gap-2 mb-4">
                    Categorías 🐾
                </h2>
                <ul class="space-y-2 mb-6">
                    <li><label class="flex items-center gap-2"><input type="radio" name="categoria" value="" x-model="filtroCategoria"> Todas</label></li>
                    <li><label class="flex items-center gap-2"><input type="radio" name="categoria" value="En adopción" x-model="filtroCategoria"> En adopción</label></li>
                    <li><label class="flex items-center gap-2"><input type="radio" name="categoria" value="Adopciones dobles" x-model="filtroCategoria"> Adopciones dobles</label></li>
                    <li><label class="flex items-center gap-2"><input type="radio" name="categoria" value="En acogida" x-model="filtroCategoria"> En acogida</label></li>
                    <li><label class="flex items-center gap-2"><input type="radio" name="categoria" value="Casos especiales" x-model="filtroCategoria"> Casos especiales</label></li>
                </ul>
        
                <h2 class="text-lg font-bold flex items-center gap-2 mb-4">
                    Sexo 🐾
                </h2>
                <ul class="space-y-2 mb-6">
                    <li><label class="flex items-center gap-2"><input type="radio" name="sexo" value="" x-model="filtroSexo"> Todos</label></li>
                    <li><label class="flex items-center gap-2"><input type="radio" name="sexo" value="Hembra" x-model="filtroSexo"> Hembra</label></li>
                    <li><label class="flex items-center gap-2"><input type="radio" name="sexo" value="Macho" x-model="filtroSexo"> Macho</label></li>
                </ul>
        
                <button @click="limpiarFiltros()" class="w-full bg-lime-500 hover:bg-lime-600 text-white px-4 py-2 rounded transition">
                    Limpiar filtros
                </button>
            </aside>
        
            <!-- LISTA DE ANIMALES -->
            <section class="flex-1">
                <div class="flex justify-end mb-4">
                    <select class="border rounded px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-lime-300">
                        <option>Ordenar por antiguos primero</option>
                        <option>Ordenar por recientes primero</option>
                    </select>
                </div>
        
                <!-- GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <template x-for="animal in filtrados" :key="animal.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                            <img :src="`/storage/${animal.imagen}`" :alt="animal.nombre" class="w-full h-48 object-cover">
                            <div class="p-4 flex-1">
                                <h3 class="font-bold text-lg" x-text="animal.nombre"></h3>
                                <p class="text-sm text-gray-600" x-text="animal.categoria"></p>
                                <p class="text-sm mt-1" x-text="animal.descripcion"></p>
                            </div>
                            <a :href="`/animales/${animal.id}`" 
                                class="bg-lime-500 text-white text-center py-2 font-semibold hover:bg-lime-600 transition">
                                > Más información
                            </a>
                        </div>
                    </template>
                </div>
            </section>
        </div>
        
    

      <!-- Main -->
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')
</body>
</html>
<script>
    const data = {
        animales: @json($animales),
    };
    console.log(data);
</script>

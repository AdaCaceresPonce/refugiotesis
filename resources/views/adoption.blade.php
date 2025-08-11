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
    <section class="relative h-64 w-full bg-cover bg-center"
             style="background-image: url('{{ asset('img/adoption/banner_2_adopciones_2.jpg') }}');">
        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 flex flex-col items-end justify-center h-full px-6 md:px-16">
            <h1 class="text-white text-3xl md:text-5xl font-bold text-right">Adopción</h1>
            <button class="mt-4 bg-cyan-500 text-white px-6 py-2 rounded-full hover:bg-cyan-600 transition">
                Requisitos para Adoptar
            </button>
        </div>
    </section>

    <section class="bg-gray-100 py-16 px-6 md:px-20">
        <!-- Encabezado -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-cyan-900">¿Quiénes somos?</h2>
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
                    En <span class="text-blue-600 font-semibold">Refugio Patitas del Sur</span>,  creemos que cada mascota merece una familia que la ame y un hogar donde pueda sentirse segura y feliz.
                    <br><br>
                    Ponemos a tu disposición a nuestros adorables rescatados, quienes han pasado por procesos de cuidado, atención y mucho cariño para estar listos para su nueva oportunidad de vida.

                    Al adoptar, no solo cambias la vida de una mascota, sino que también ganas un amigo fiel que te brindará amor incondicional.

                    ¡Dales la oportunidad que se merecen y adopta hoy!.
                </p>
            </div>

            <!-- Imagen circular derecha -->
            <div class="w-60 h-60 rounded-full border-4 border-cyan-400 overflow-hidden flex-shrink-0">
                <img src="{{ asset('img/us/fondo_3.jpg') }}" alt="Perros del refugio" class="w-full h-full object-cover">
            </div>
        </div>

    </section>
    <!-- Contenido principal -->
    <div x-data="filtroAnimales()" class="flex flex-row min-h-screen w-full max-w-screen-xl mx-auto px-4 py-8 gap-6">
        
        <!-- Sidebar filtros -->
        <aside class="w-64 bg-white shadow-md rounded-lg p-4 sticky top-4 h-fit">
            <!-- Filtro Animales -->
            <h2 class="text-lg font-bold mb-4">Animales 🐾</h2>
            <ul class="space-y-2 mb-6">
                <li><label><input type="radio" name="animal" value="" x-model="filtroAnimal"> Todos</label></li>
                <li><label><input type="radio" name="animal" value="Perro" x-model="filtroAnimal"> Perros (19)</label></li>
                <li><label><input type="radio" name="animal" value="Gato" x-model="filtroAnimal"> Gatos (29)</label></li>
            </ul>

            <!-- Filtro Categorías -->
            <h2 class="text-lg font-bold mb-4">Categorías 🐾</h2>
            <ul class="space-y-2 mb-6">
                <li><label><input type="radio" name="categoria" value="" x-model="filtroCategoria"> Todas</label></li>
                <li><label><input type="radio" name="categoria" value="En adopción" x-model="filtroCategoria"> En adopción</label></li>
                <li><label><input type="radio" name="categoria" value="Adopciones dobles" x-model="filtroCategoria"> Adopciones dobles</label></li>
                <li><label><input type="radio" name="categoria" value="En acogida" x-model="filtroCategoria"> En acogida</label></li>
                <li><label><input type="radio" name="categoria" value="Casos especiales" x-model="filtroCategoria"> Casos especiales</label></li>
            </ul>

            <!-- Filtro Sexo -->
            <h2 class="text-lg font-bold mb-4">Sexo 🐾</h2>
            <ul class="space-y-2 mb-6">
                <li><label><input type="radio" name="sexo" value="" x-model="filtroSexo"> Todos</label></li>
                <li><label><input type="radio" name="sexo" value="Hembra" x-model="filtroSexo"> Hembra</label></li>
                <li><label><input type="radio" name="sexo" value="Macho" x-model="filtroSexo"> Macho</label></li>
            </ul>

            <!-- Botón limpiar -->
            <button @click="limpiarFiltros"
                    class="w-full px-4 py-2 text-white rounded hover:opacity-90 transition"
                    style="background-color: #091D63;">
                Limpiar filtros
            </button>
        </aside>

        <!-- Lista de animales filtrados -->
        {{-- <section class="flex-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="animal in animalesFiltrados" :key="animal.id">
                <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                    
                    <!-- Etiqueta urgente -->
                    <template x-if="animal.urgente">
                        <div class="bg-pink-700 text-white text-xs font-bold px-2 py-1 text-center">
                            ADOPCIÓN URGENTE
                        </div>
                    </template>

                    <!-- Imagen -->
                    <img :src="animal.imagen ? `/storage/${animal.imagen}` : '{{ asset('images/default.jpg') }}'"
                         :alt="animal.nombre"
                         class="w-full h-64 object-cover">

                    <!-- Info -->
                    <div class="p-3 flex-1 flex flex-col justify-between">
                        <div class="text-center">
                            <h3 class="font-bold text-lg uppercase" x-text="animal.nombre"></h3>
                            <p class="text-sm text-gray-600" x-text="animal.categoria"></p>
                            <p class="text-sm text-gray-500" x-text="animal.descripcion"></p>
                        </div>

                        <!-- Botón -->
                        <a :href="`/animales/${animal.id}`"
                           class="mt-4 block text-center bg-[#B7BF10] hover:bg-[#091D63] text-white font-bold py-2">
                            > Más información
                        </a>
                    </div> 
                </div>
            </template>
        </section>  
         --}}

        <!-- Contenedor principal: Sidebar + Tarjetas -->
        <div x-data="filtroAnimales()" class="flex flex-row w-full max-w-screen-xl mx-auto px-4 py-8 gap-6">
            
            <!-- Contenido principal -->
            <div class="flex-1">
                <!-- Grid de tarjetas -->
                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-start">
                    <template x-for="animal in animalesPaginados" :key="animal.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col h-auto">
                            <template x-if="animal.urgente">
                                <div class="bg-pink-700 text-white text-xs font-bold px-2 py-1 text-center">
                                    ADOPCIÓN URGENTE
                                </div>
                            </template>
                
                            <img :src="animal.imagen ? `/storage/${animal.imagen}` : '{{ asset('images/default.jpg') }}'"
                                :alt="animal.nombre"
                                class="w-full h-60 object-cover">
                
                            <div class="p-2 flex flex-col items-center gap-1">
                                <h3 class="font-bold text-sm uppercase" x-text="animal.nombre"></h3>
                                <p class="text-xs text-gray-500 text-center" x-text="animal.descripcion"></p>
                                <a :href="`/animales/${animal.id}`"
                                class="mt-1 block text-center bg-[#B7BF10] hover:bg-[#091D63] text-white text-xs font-bold py-1 px-2 rounded">
                                    > Más información
                                </a>
                            </div>
                        </div>
                    </template>
                </section>

                <!-- Paginación centrada -->
                <div class="flex justify-center mt-6 space-x-2">
                    <button 
                        @click="paginaActual = Math.max(paginaActual - 1, 1)" 
                        :disabled="paginaActual === 1"
                        class="px-3 py-1 border rounded disabled:opacity-50">
                        ←
                    </button>

                    <template x-for="pagina in totalPaginas" :key="pagina">
                        <button 
                            @click="paginaActual = pagina" 
                            :class="{'bg-blue-500 text-white': paginaActual === pagina}" 
                            class="px-3 py-1 border rounded">
                            <span x-text="pagina"></span>
                        </button>
                    </template>

                    <button 
                        @click="paginaActual = Math.min(paginaActual + 1, totalPaginas)" 
                        :disabled="paginaActual === totalPaginas"
                        class="px-3 py-1 border rounded disabled:opacity-50">
                        →
                    </button>
                </div>
            </div>
        </div>
    </div>  
    
    <section class="bg-lime-500 py-2">
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 text-white text-center">
            
            <!-- Botón -->
            <a href="/apadrina" class="flex flex-col items-center px-2 border-r border-white/40 last:border-none hover:bg-lime-600 transition rounded-lg py-3">
                <div class="w-8 h-8 rounded-full border-2 border-white flex items-center justify-center mb-2 text-lg">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <h3 class="font-bold text-sm">Apadrina ternura</h3>
                <p class="text-xs mt-1">Con 20/mes, haces más que sustentarles.</p>
            </a>
    
            <a href="/adopta" class="flex flex-col items-center px-2 border-r border-white/40 last:border-none hover:bg-lime-600 transition rounded-lg py-3">
                <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center mb-2 text-lg">
                    <i class="fa-solid fa-paw"></i>
                </div>
                <h3 class="font-bold text-sm">Adopta compromiso</h3>
                <p class="text-xs mt-1">Tendrás el amigo fiel que necesitas.</p>
            </a>
    
            <a href="/hazte-socio" class="flex flex-col items-center px-2 border-r border-white/40 last:border-none hover:bg-lime-600 transition rounded-lg py-3">
                <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center mb-2 text-lg">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h3 class="font-bold text-sm">Hazte socio</h3>
                <p class="text-xs mt-1">Con 15/mes puedes ser nuestro socio.</p>
            </a>
    
            <a href="/voluntarios" class="flex flex-col items-center px-2 border-r border-white/40 last:border-none hover:bg-lime-600 transition rounded-lg py-3">
                <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center mb-2 text-lg">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3 class="font-bold text-sm">Voluntarios de ilusión</h3>
                <p class="text-xs mt-1">Vuestro corazón es la fuerza de nuestra protección.</p>
            </a>
    
            <a href="/empresas" class="flex flex-col items-center px-2 hover:bg-lime-600 transition rounded-lg py-3">
                <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center mb-2 text-lg">
                    <i class="fa-solid fa-building"></i>
                </div>
                <h3 class="font-bold text-sm">Empresas solidarias</h3>
                <p class="text-xs mt-1">Un poco de ayuda es de gran importancia para ellos.</p>
            </a>
    
        </div>
    </section>
    
    
      
    {{-- Footer --}}
    @include('partials.footer')

    <!-- Script Alpine -->
    <script>
        function filtroAnimales() {
            return {
                animales: @json($animales),
                filtroAnimal: '',
                filtroCategoria: '',
                filtroSexo: '',
                get animalesFiltrados() {
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
            }
        }


            function filtroAnimales() {
        return {
            animales: @json($animales),
            filtroAnimal: '',
            filtroCategoria: '',
            filtroSexo: '',
            paginaActual: 1,
            porPagina: 12, // 12 tarjetas por página

            get animalesFiltrados() {
                return this.animales.filter(a => {
                    let tipoOk = this.filtroAnimal ? a.tipo === this.filtroAnimal : true;
                    let categoriaOk = this.filtroCategoria ? a.categoria === this.filtroCategoria : true;
                    let sexoOk = this.filtroSexo ? a.sexo === this.filtroSexo : true;
                    return tipoOk && categoriaOk && sexoOk;
                });
            },

            get totalPaginas() {
                return Math.ceil(this.animalesFiltrados.length / this.porPagina);
            },

            get animalesPaginados() {
                const inicio = (this.paginaActual - 1) * this.porPagina;
                return this.animalesFiltrados.slice(inicio, inicio + this.porPagina);
            },

            limpiarFiltros() {
                this.filtroAnimal = '';
                this.filtroCategoria = '';
                this.filtroSexo = '';
                this.paginaActual = 1;
            }
        }
    }
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="min-h-screen flex flex-col">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    
        {{-- Carrusel--}}
        <div x-data="carousel()" x-init="start()" @keydown.window="keyboardNavigation($event)" class="relative w-full h-[600px] overflow-hidden">
            <!-- Slides -->
            <template x-for="(slide, index) in slides" :key="index">
                <div
                    x-show="active === index"
                    x-transition
                    class="absolute inset-0 bg-cover bg-center flex items-center justify-center text-white text-center px-6"
                    :style="`background-image: url(${slide.image})`"
                >
                    {{-- <div class="bg-black/50 p-6 rounded-lg">
                        <h2 class="text-3xl font-bold mb-2" x-text="slide.title"></h2>
                        <p class="text-lg" x-text="slide.text"></p>
                    </div> --}}
                    {{-- <div class="bg-black/50 p-6 rounded-lg max-w-xl">
                        <h2 class="text-3xl font-bold mb-2" x-text="slide.title"></h2>
                        <p class="text-lg mb-4" x-text="slide.text"></p>
                        <a href="#" class="inline-flex items-center bg-cyan-500 text-white px-5 py-2 rounded-md font-semibold hover:bg-cyan-600 transition">
                            Conoce más
                            <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div> --}}
                    <!-- Contenido del slide -->
                    <div class="flex items-center justify-center w-full h-full">
                        <div class="bg-white/30 text-gray-900 p-6 rounded-lg max-w-2xl w-full backdrop-blur-sm">
                            <!-- Mostrar este bloque solo en el primer slide -->
                            <template x-if="index === 0">
                                <div class="max-w-xl mx-auto text-center">
                                    <p class="text-cyan-500 font-semibold uppercase text-sm mb-1">Te damos la bienvenida al</p>
                                    <h2 class="text-2xl md:text-3xl font-extrabold mb-4 animate-color-change">
                                        Refugio Patitas del Sur <br class="hidden md:block" /> (Chincha)
                                    </h2>
                                    <p class="text-gray-700 mb-6 leading-relaxed">
                                        Este proyecto nace con la esperanza de poder ayudar a nuestros hermanos pequeños de la calle,
                                        dándoles una <span class="font-bold">segunda oportunidad de vivir y de conocer el amor.</span>
                                    </p>
                                    <a href="#"
                                    class="inline-flex items-center bg-cyan-500 text-white px-5 py-2 rounded-md font-semibold hover:bg-cyan-600 transition">
                                        Conoce más
                                        <i class="fa-solid fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </template>

                            <!-- Mostrar el contenido dinámico en los otros slides -->
                            <template x-if="index !== 0">
                                <div class="max-w-xl mx-auto text-center">
                                    <h2 class="text-3xl font-bold mb-2" x-text="slide.title"></h2>
                                    <p class="text-lg mb-4" x-text="slide.text"></p>
                                    <a href="#" class="inline-flex items-center bg-cyan-500 text-white px-5 py-2 rounded-md font-semibold hover:bg-cyan-600 transition">
                                        Conoce más
                                        <i class="fa-solid fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </template>
                        </div>
                    </div>

                </div>
            </template>
        
            <!-- Botones -->
            <button @click="prev()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white px-4 py-2 rounded-full z-10">
                &#10094;
            </button>
            <button @click="next()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white px-4 py-2 rounded-full z-10">
                &#10095;
            </button>
        
            <!-- Indicadores -->
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button
                        class="w-3 h-3 rounded-full"
                        :class="active === index ? 'bg-white' : 'bg-gray-400'"
                        @click="goTo(index)"
                    ></button>
                </template>
            </div>
        </div>
    </body>
</html>
<script>
    function carousel() {
        return {
            active: 0,
            slides: [
                {
                    image: "{{ asset('img/carrusel/fondo_7.png') }}",
                    title: "Refugio Patitas del Sur",
                    text: "Este proyecto nace con la esperanza de ayudar a nuestros amigos de la calle.",
                },
                {
                    image: "{{ asset('img/carrusel/fondo_9.jpg') }}",
                    title: "Un nuevo hogar",
                    text: "Gracias a ti, damos una segunda oportunidad a nuestros peluditos.",
                },
                {
                    image: "{{ asset('img/carrusel/fondo_10.jpg') }}",
                    title: "Adopta con amor",
                    text: "Cambia una vida con tu amor y recibe gratitud para siempre.",
                },
            ],
            start() {
                setInterval(() => {
                    this.next();
                }, 6000); // cambia cada 6 segundos
            },
            next() {
                this.active = (this.active + 1) % this.slides.length;
            },
            prev() {
                this.active = (this.active - 1 + this.slides.length) % this.slides.length;
            },
            goTo(index) {
                this.active = index;
            },
            keyboardNavigation(e) {
                if (e.key === 'ArrowLeft') this.prev();
                if (e.key === 'ArrowRight') this.next();
            }
        }
    }
</script>    



        
        
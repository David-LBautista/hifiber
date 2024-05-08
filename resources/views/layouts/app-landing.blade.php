<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HIFIBER</title>
    <meta name="description" content="" />

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <link rel="manifest" href="site.webmanifest" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('assets/css/themplate/normalize.css') }}" />

    <!-- !Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- !Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/themplate/main.css') }}" />

    <!-- !FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />

    <!-- !AOS JS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <meta name="theme-color" content="#fafafa" />
</head>

<body class="">
    <header id="navbar" class="bg-white sticky-top">
        <nav class="mx-auto flex container items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <img class="h-14 w-auto" src="{{ asset('assets/img/hifiber_logo.png') }}" alt="" />
                </a>
            </div>

            <div class="flex lg:hidden">
                <button id="openMenuButton" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <div class="hidden lg:flex lg:gap-x-12">
                <div class="relative"></div>
                <a href="#servicios" onclick="window.location.href ='./'; return false;"
                    class="text-sm custom-link font-normal leading-6 text-gray-900 hover:font-extralight">Servicios</a>
                <a href="#clientes" onclick="window.location.href ='./'; return false;"
                    class="text-sm custom-link font-normal leading-6 text-gray-900 hover:font-extralight">Nuestros
                    clientes</a>
                <a href="" onclick="window.location.href ='./internet'; return false;"
                    class="text-sm custom-link font-normal leading-6 text-gray-900 hover:font-extralight">Wireless</a>
                <a href="" onclick="window.location.href ='./fiber'; return false;"
                    class="text-sm custom-link font-normal leading-6 text-gray-900 hover:font-extralight">Fibra Optica</a>
                <a href="#galeria" onclick="window.location.href ='./'; return false;"
                    class="text-sm custom-link font-normal leading-6 text-gray-900 hover:font-extralight">Galeria</a>

                <a href="#cobertura" onclick="window.location.href ='./'; return false;"
                    class="text-sm custom-link font-semibold leading-6 text-gray-900 border-l border-gray-300 pl-7">Cobertura</a>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <div class="bg-black px-6 py-3 text-white text-xs tracking-widest animation-primary">
                    <div class="circle"></div>
                    <a href="#contacto" onclick="window.location.href ='./'; return false;">CONTACTANOS</a>
                </div>
                
            </div>
        </nav>

        <!-- Mobile menu, show/hide based on menu open state. -->
        <div id="mobileMenu" class="hidden lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <img class="h-14 w-auto" src="{{ asset('assets/img/hifiber_logo.png') }}" alt="" />
                    </a>
                    <button id="closeMenuButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div>
                        <div class="space-y-2 py-6">
                            <a href="#servicios" onclick="window.location.href ='./'; return false;"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-light leading-7 text-gray-900 hover:bg-gray-50">Servicios</a>
                            <a href="#clientes" onclick="window.location.href ='./'; return false;"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-light leading-7 text-gray-900 hover:bg-gray-50">Nuestros
                                Clientes</a>
                            <a href="#" onclick="window.location.href = 'internet'; return false;"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-light leading-7 text-gray-900 hover:bg-gray-50">Wireless</a>
                            <a href="#" onclick="window.location.href = 'fiber'; return false;"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-light leading-7 text-gray-900 hover:bg-gray-50">Fibra Optica</a>
                            <a href="#galeria" onclick="window.location.href ='./'; return false;"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-light leading-7 text-gray-900 hover:bg-gray-50">Galeria</a>

                            <a href="#cobertura" onclick="window.location.href ='./'; return false;"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-light leading-7 text-gray-900 hover:bg-gray-50">Cobertura</a>
                        </div>
                        <div class="lg:flex lg:flex-1 lg:justify-end">
                            <a href="#contacto" onclick="window.location.href ='./'; return false;"
                                class="bg-black w-full px-6 py-3 text-white text-xs hover:bg-slate-600 tracking-widest mt-4">
                                CONTACTANOS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    @yield('fiber')

    <div class="section-separator my-12"></div>

    <!-- ========= -->
    <!-- footer -->
    <!-- ========= -->
    <section class="background-secondary mt-10 lg:mt-24 px-6 xl:px-0">
        <div class="lg:px-20 pt-10 lg:pb-40 container mx-auto grid lg:grid-cols-2 lg:gap-4">
            <a href="#" class="-m-1.5 p-1.5">
                <img class="h-14 w-auto" src="{{ asset('assets/img/hifiber_logo.png') }}" alt="" />
            </a>
            <div class="grid md:grid-cols-2 pt-10 md:pt-0">
                <div>
                    <p class="text-sm font-bold">COMPAÑIA</p>
                    <p />
                    <a target="_blank" href="{{ asset('assets/files/aviso-de-privacidad.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Aviso de Privacidad</a>
                    <a target="_blank" href="{{ asset('assets/files/terminos_y_condiciones.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Términos y condiciones</a>
                </div>
                <div>
                    <p class="text-sm font-bold">LEGAL</p>
                    <a target="_blank" href="{{ asset('assets/files/concesion.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Concesión</a>
                    <a target="_blank" href="{{ asset('assets/files/codigo-de-politicas-de-gestion-de-trafico-sne.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Codigo de gestion de tráfico.</a>
                    <a target="_blank" href="{{ asset('assets/files/folios-de-tarifas-registradas-ift.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Constancia de cobertura IFT.</a>
                    <a target="_blank" href="{{ asset('assets/files/codigo-de-practicas-comerciales.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Código de práctica comercial.</a>
                    <a target="_blank" href="{{ asset('assets/files/contrato-de-adhesion-profeco.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Contrato PROFECO.</a>
                    <a target="_blank" href="{{ asset('assets/files/carta-de-derechos-minimos.pdf') }}" class="text-sm font-normal my-2 cursor-pointer block">Carta de derechos minimos.</a>
                    <a class="text-sm font-normal my-2 cursor-pointer block">Políticas de gestión de tráfico.</a>
                    <a class="text-sm font-normal my-2 cursor-pointer block">Lineamientos de información.</a>
                </div>
            </div>
        </div>
        <div class="section-separator my-12"></div>
        <div class="mx-auto pb-12 container background-secondary text-center w-ful text-sm">
            Copyright &copy;2024 Hifiber
        </div>
    </section>

    <div class="sticky-logo flex items-center" onclick="window.location.href='https://wa.me/8131011770'; return false;">
        <div class="background-secondary p-2">
            <a href="https://wa.me/8131011770" class="text-xs w-full">Chatea con nosotros! &#128526;</a>
        </div>
        <img src="{{ asset('assets/img/whats_app.webp') }}" alt="Logo" class="wapp ml-1" />
    </div>

    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

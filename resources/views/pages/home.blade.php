@extends('layouts.app-landing')

@section('content')
    <!-- ========= -->
    <!-- banner -->
    <!-- ========= -->
    <section class="py-10 px-6 xl:px-0">
        <div class="mx-auto container grid sm:grid-cols-2 gap-4 items-center">
            <div class="">
                <div class="backgorund-light-grey flex px-3 py-2 items-center w-max">
                    <p class="background-primary text-white py-1 px-2 text-xs font-semibold">
                        NUEVO
                    </p>
                    <p class="ml-2 text-xs font-medium">Mantente conectado!</p>
                </div>
                <div class="text-4xl sm:text-3xl lg:text-5xl font-bold w-full md:w-5/6 my-6">
                    Disfruta con toda tu familia al máximo del internet con HIFIBER.
                </div>
                <div class="text-md md:text-base text-gray-400 font-normall w-full md:w-5/6">
                    Somos una Empresa de Telecomunicaciones con Título de Concesión
                    Única otorgada por IFT. Desde Agosto del 2018 hemos venido
                    ofreciendo nuestro servicio de internet residencial tipo Wireless,
                    actualmente contamos servicio por fibra óptica principalmente en el
                    Municipio de Juárez Nuevo León.
                </div>
            </div>

            <div class="w-full md:w-5/6 center" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                <img src="{{ asset('assets/img/world.svg') }}" alt="" />
            </div>
        </div>
    </section>
    <!-- ========= -->
    <!-- ========= -->
    <!-- ========= -->

    <!-- ========= -->
    <!-- servicios -->
    <!-- ========= -->
    <section id="servicios" class="py-10 lg:mt-24 px-6 xl:px-0">
        <div class="mx-auto container grid sm:grid-cols-2 md:grid-cols-2 gap-4 items-center justify-center">
            <div class="order-2 md:order-1 md:w-3/5 md:h-96 center">
                <img class="mt-20 lg:mt-0" src="{{ asset('assets/img/internet.svg') }}" alt="" data-aos="fade-up"
                    data-aos-easing="linear" data-aos-duration="500" />
            </div>
            <div class="order-1 md:order-2">
                <p class="text-white py-1 px-2 text-sm font-semibold text-primary tracking-widest">
                    SERVICIOS
                </p>
                <div class="font-bold w-full md:w-5/6 mb-6 mt-1">
                    <p class="text-3xl sm:text-2xl lg:text-4xl">
                        Somos los expertos en
                    </p>
                    <p class="text-primary text-3xl sm:text-2xl lg:text-4xl">
                        infraestructura de conexion a internet
                    </p>
                </div>
                <div class="text-base text-gray-400 font-normal w-full md:w-5/6">
                    Desde la instalación de redes de fibra óptica hasta la optimización
                    de la velocidad de conexión, nuestro equipo especializado te
                    garantiza un rendimiento óptimo en tu red.
                </div>
            </div>
        </div>
    </section>
    <!-- ========= -->
    <!-- ========= -->
    <!-- ========= -->

    <!-- ========= -->
    <!-- Clientes -->
    <!-- ========= -->
    <section id="clientes" class="mx-auto container py-10 md:mt-0 lg:mt-24 px-6 xl:px-0">
        <div class="grid sm:grid-cols-2 md:grid-cols-5 gap-4 items-center justify-center">
            <div class="mt-10 col-span-3">
                <p class="text-white py-1 px-2 text-sm font-semibold text-primary tracking-widest">
                    ¿PORQUE ELEGIRNOS?
                </p>
                <div class="font-bold w-full md:w-5/6 mb-6 mt-1">
                    <p class="text-3xl sm:text-2xl lg:text-4xl">
                        Llevemos tu experiencia de internet al siguiente nivel!
                    </p>
                </div>
                <div class="text-base text-gray-400 font-normal w-full md:w-5/6">
                    En Hifiber nos enorgullece ofrecer una infraestructura de conexión
                    confiable y de calidad superior.
                </div>
                <div class="grid lg:grid-cols-2 gap-4 mt-10">
                    <div class="card flex gap-4 p-4">
                        <div class="icon-container bg-white">
                            <div class="flex justify-center items-center h-full border border-grey icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#07d915" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-semibold">Confiabilidad</p>
                            <p class="text-sm mt-1">
                                Te ofrecemos una experiencia fluida y sin interrupciones al
                                navegar.
                            </p>
                        </div>
                    </div>
                    <div class="card flex gap-4 p-4">
                        <div class="icon-container bg-white">
                            <div class="flex justify-center items-center h-full border border-grey icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#07d915" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.288 15.038a5.25 5.25 0 0 1 7.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 0 1 1.06 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-semibold">Velocidad</p>
                            <p class="text-sm mt-1">
                                Desata el potencial de tu conexión con nuestra velocidad sin
                                límites. ¡Descubre un internet más rápido que nunca!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 gap-4 mt-6">
                    <div class="card flex gap-4 p-4 w">
                        <div class="icon-container bg-white">
                            <div class="flex justify-center items-center h-full border border-grey icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#07d915" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-semibold">Cobertura</p>
                            <p class="text-sm mt-1">
                                Con una amplia cobertura, estamos comprometidos a brindar
                                acceso a internet en todas partes.
                            </p>
                        </div>
                    </div>
                    <div class="card flex gap-4 p-4">
                        <div class="icon-container bg-white">
                            <div class="flex justify-center items-center h-full border border-grey icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#07d915" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-semibold">Atencion al Cliente</p>
                            <p class="text-sm mt-1">
                                Nuestro equipo de atencion esta disponible para ayudar en
                                cualquier momento.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card flex gap-4 p-4 mt-6">
                        <div class="h-12 w-14 bg-white">
                            <div class="flex justify-center items-center h-full border border-grey icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#07d915" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-base font-semibold">Precios competitivos</p>
                            <p class="text-sm mt-1">
                                Ofrecemos planes de servicio flexibles y competitivos para
                                adaptarnos a las necesidades y presupuesto de nuestros
                                clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:h-full hidden md:flex justify-center col-span-2">
                <img class="" src="{{ asset('assets/img/woman_pointing.png') }}" alt=""
                    data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500" />
            </div>
        </div>
    </section>
    <!-- ========= -->
    <!-- ========= -->
    <!-- ========= -->

    <!-- ========= -->
    <!-- slider -->
    <!-- ========= -->
    <section class="background-secondary mt-10 lg:mt-24 px-6 xl:px-0">
        <div class="lg:px-20 py-20 container mx-auto">
            <p class="text-3xl md:text-4xl lg:text-5xl font-bold text-center">
                ¿Que opinan nuestros clientes?
            </p>
            <p class="mt-10 mx-auto w-full md:w-7/12 text-center tracking-wide leading-7 text-gray-400 font-normal">
                Lee los testimonios de clientes satisfechos que han experimentado
                nuestros servicios. Esto refleja nuestro compromiso con la excelencia
                y satisfacción del cliente.
            </p>

            <div class="mx-auto">
                <div class="splide mt-12 mx-auto xl:w-10/12">
                    <div class="splide__track">
                        <ul class="splide__list gap-2">
                            <li class="splide__slide bg-white p-8">
                                <div>
                                    <p class="tracking-wide leading-6">
                                        Conexión confiable para mis clases en línea. ¡Gracias!
                                    </p>
                                    <div class="flex mt-8 justify-between items-center">
                                        <img class="w-16 h-16 slide-img" src="{{ asset('assets/img/avatar.svg') }}"
                                            alt="" />
                                        <div class="ml-4">
                                            <p class="text-3xl md:text-4xl text-primary font-bold">
                                                María Fernández
                                            </p>
                                            <p class="text-xs">Maestra</p>
                                        </div>
                                        <img class="w-16 h-16" src="{{ asset('assets/img/quotes.svg') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide bg-white p-8">
                                <div>
                                    <p class="tracking-wide leading-6">
                                        El servicio superó mis expectativas. ¡Increíble velocidad!
                                    </p>
                                    <div class="flex mt-8 justify-between items-center">
                                        <img class="w-16 h-16 slide-img" src="{{ asset('assets/img/avatar.svg') }}"
                                            alt="" />
                                        <div class="ml-4">
                                            <p class="text-4xl text-primary font-bold">
                                                Javier Morales
                                            </p>
                                            <p class="text-xs">Abogado</p>
                                        </div>
                                        <img class="w-16 h-16" src="{{ asset('assets/img/quotes.svg') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide bg-white p-8">
                                <div class="ml-4">
                                    <p class="tracking-wide leading-6">
                                        Con Hifiber, mis descargas son rápidas y sin
                                        interrupciones.
                                    </p>
                                    <div class="flex mt-8 justify-between items-center">
                                        <img class="w-16 h-16 slide-img" src="{{ asset('assets/img/avatar.svg') }}"
                                            alt="" />
                                        <div class="ml-4">
                                            <p class="text-4xl text-primary font-bold">
                                                Karla Rodríguez
                                            </p>
                                            <p class="text-xs">Estudiante</p>
                                        </div>
                                        <img class="w-16 h-16" src="{{ asset('assets/img/quotes.svg') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= -->
    <!-- ========= -->
    <!-- ========= -->

    <!-- ========= -->
    <!-- GALERIA -->
    <!-- ========= -->
    <section id="galeria" class="mt-10 mb-10 mx-auto container py-8 lg:mt-10 xl:mt-20 px-6 xl:px-0">
        <div class="grid md:grid-cols-7">
            <div class="font-bold w-full md:w-5/6 mb-6 mt-1 md:col-span-3 lg:col-span-3 xl:col-span-4">
                <p class="text-3xl sm:text-2xl lg:text-4xl">Conoce nuestro trabajo</p>
                <ul class="mt-8">
                    <li class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#07d915" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="ml-2 text-sm font-normal">
                            Velocidad, fiabilidad, satisfacción.
                        </p>
                    </li>
                    <li class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#07d915" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="ml-2 text-sm font-normal">
                            Innovación, creatividad, impacto y éxito.
                        </p>
                    </li>
                    <li class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#07d915" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="ml-2 text-sm font-normal">
                            Experiencia sólida, servicio superior
                        </p>
                    </li>
                </ul>
                <div class="lg:flex lg:flex-1 lg:justify-start mt-5 rou">
                    <button class="bg-black px-6 py-3 text-white animation-primary" onclick="window.location.href='https://wa.me/8131011770'; return false;">
                        <div class="circle"></div>
                        <a href="#" class="flex items-center">
                            <p class="mr-2 text-xs tracking-widest">HABLA CON UN EXPERTO</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </button>
                </div>
            </div>
            <div class="md:col-span-4 lg:col-span-4 xl:col-span-3">
                <div class="grid grid-cols-2 gap-6">
                    <img class="rounded-lg" src="{{ asset('assets/img/image1.jpeg') }}" alt="" />
                    <img class="rounded-lg" src="{{asset('assets/img/antena.jpg')}}" alt="" />
                </div>
                <div class="grid grid-cols-2 gap-6 mt-6">
                    <img class="rounded-lg" src="{{asset('assets/img/image3.jpeg')}}" alt="" />
                    <img class="rounded-lg" src="{{asset('assets/img/image4.jpeg')}}" alt="" />
                </div>
                <div class="grid grid-cols-2 gap-6 mt-6">
                    <img class="rounded-lg" src="{{asset('assets/img/image4.jpeg')}}" alt="" />
                    <img class="rounded-lg" src="{{asset('assets/img/image6.jpeg')}}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- ========= -->
    <!-- ========= -->

    <div class="section-separator my-12"></div>

    <!-- ========= -->
    <!-- metrics -->
    <!-- ========= -->
    <section class="background-secondary mt-10 lg:mt-24 px-6 xl:px-0">
        <div class="lg:px-20 py-20 container mx-auto grid grid-cols-2 lg:grid-cols-4 lg:gap-4 gap-y-6 lg:gap-y-0">
            <div class="text-center">
                <p class="text-4xl font-semibold">12</p>
                <p class="text-sm font-normal mt-2">
                    Zonas completamente conectadas.
                </p>
            </div>
            <div class="text-center border-l border-gray-400">
                <p class="text-4xl font-semibold">100%</p>
                <p class="text-sm font-normal mt-2">Tiempo activo.</p>
            </div>
            <div class="text-center lg:border-l border-gray-400">
                <p class="text-4xl font-semibold">+2500</p>
                <p class="text-sm font-normal mt-2">Clientes satisfechos.</p>
            </div>
            <div class="text-center border-l border-gray-400">
                <p class="text-4xl font-semibold">8</p>
                <p class="text-sm font-normal mt-2">Zonas ahora con fibra optica.</p>
            </div>
        </div>
    </section>
    <!-- ========= -->
    <!-- ========= -->
    <!-- ========= -->

    <!-- ========= -->
    <!-- contacto -->
    <!-- ========= -->
    <section id="contacto" class="mt-10 mb-10 mx-auto container py-8 lg:mt-10 xl:mt-20 px-6 xl:px-0">
        <div class="grid grid-cols-12 mx-auto xl:max-w-5xl gap-6">
            <div class="font-bold w-full md:w-5/6 mb-6 mt-1 col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                <p class="text-3xl sm:text-2xl lg:text-4xl">¡Contactanos!</p>
                <ul class="mt-8">
                    <li class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#07d915" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="ml-2 text-sm font-normal">+52 (813) 101 1770</p>
                    </li>
                    <li class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#07d915" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="ml-2 text-sm font-normal">
                            atencionaclientes@hifiber.com.mx servinetfiber@gmail.com
                        </p>
                    </li>
                    <li class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="#07d915" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="ml-2 text-sm font-normal">
                            Dirección: Av. Fundidora #501, Local 35. <br />Colonia Obrera,
                            Monterrey, Nuevo León. <br />Código Postal: 64010.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                <div class="isolate bg-white">
                    <form id="contactForm" action="#" method="POST" class="">
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div>
                                <label for="first-name"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Nombre</label>
                                <div class="mt-2.5">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div>
                                <label for="last-name"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Apellido</label>
                                <div class="mt-2.5">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                                <div class="mt-2.5">
                                    <input type="email" name="email" id="email" autocomplete="email"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="telefono"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Telefono</label>
                                <div class="mt-2.5">
                                    <input type="telefono" name="telefono" id="telefono" autocomplete="telefono"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Mensaje</label>
                                <div class="mt-2.5">
                                    <textarea name="message" id="message" rows="4"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="lg:flex lg:flex-1 lg:justify-start mt-5">
                            <button class="bg-black px-6 py-3 text-white animation-primary w-full text-center">
                                <div class="circle"></div>
                                <a href="#" class="flex items-center justify-center">
                                    <p class="mr-2 text-xs tracking-widest">ENVIAR</p>
                                </a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= -->
    <!-- ========= -->
@endsection

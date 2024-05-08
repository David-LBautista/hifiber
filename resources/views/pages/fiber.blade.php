@extends('layouts.app-landing')

@section('fiber')
    <section id="cobertura" class="mx-auto max-w-7xl lg:py-0 px-6 xl:px-0">
        <div class="flex flex-col text-center py-24 w-full">
            <h1 class="text-4xl sm:text-3xl lg:text-5xl font-bold">
                <span class="tracking-wide text-gray-600">SERVICIO DE</span>
                <span class="text-primary">FIBRA ÓPTICA</span>
            </h1>
            <p class="pt-6 text-md md:text-base text-gray-400 font-normal w-full px-8 md:w-full">
                Conéctate a un mundo de posibilidades ilimitadas con nuestra conexión a Internet por fibra óptica.
            </p>
        </div>
        <div style='background-color:rgb(255, 255, 255)' class="mb-20">
            <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" style="cursor: auto;">
              @foreach ($data->fiber as $item)
                <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex mt-5">
                    <div class="flex-1 px-6 py-8 bg-white lg:p-12" style="cursor: auto;">
                        <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl" style="cursor: auto;">
                          {{ $item->name }}
                        </h3>
                        <p class="mt-6 text-base text-gray-500">
                          {!! $item->description_long !!}
                        </p>
                    </div>
                    <div class="px-6 py-8 text-center bg-gray-50 lg:flex-shrink-0 mr-2 lg:flex lg:flex-col lg:justify-center lg:p-12"
                        style="cursor: auto;">
                        <p class="mt-4 text-gray-500">Desde</p>
                        <div class="flex items-center justify-center mt-4 text-5xl font-extrabold text-gray-900">
                            <span>${{ $item->price }}</span>
                            <span class="ml-3 text-xl font-medium text-gray-500">/ mes</span>
                        </div>
                        <div class="mt-6">
                            <div class="bg-black px-6 py-3 text-white text-xs tracking-widest animation-primary"
                                onclick="window.location.href='https://wa.me/8131011770'; return false;">
                                <div class="circle"></div>
                                <a href="#contacto">OBTENER</a>
                            </div>
                        </div>
                        <div class="mt-4 text-sm">
                            <a class="font-medium text-gray-700 hover:text-gray-900" target="_blank">Precio sujeto a
                                cambios.
                            </a>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-12 xl:grid-cols-12 pt-4 items-center">
            <div class="lg:col-span-4 xl:col-span-3">
                <div class="flex-1 bg-white rounded-lg mt-4">
                    <p class="text-white py-1 px-2 text-xl font-semibold text-primary tracking-widest">
                        COBERTURA
                    </p>
                    <div class="relative px-4">
                        <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>

                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Colinas del Sol.</p>
                                <p class="text-xs text-gray-500">Todas las Etapas.</p>
                            </div>
                        </div>

                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Paseo de las Margaritas.</p>
                            </div>
                        </div>

                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Rincón del Parque.</p>
                            </div>
                        </div>

                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Terranova Residencial.</p>
                            </div>
                        </div>

                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Paseo de la Rivera.</p>
                            </div>
                        </div>

                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Vistas del Rio.</p>
                            </div>
                        </div>
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Mirador del Rio VIP.</p>
                            </div>
                        </div>
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="flex-shrink-0 mr-2">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="#07d915" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Mirador del Río 1 y 2.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-8 xl:col-span-9 mt-12">
                <img src="{{ asset('assets/img/foto2.png') }}" alt="" class="rounded-2xl" />
            </div>
        </div>
    </section>
@endsection

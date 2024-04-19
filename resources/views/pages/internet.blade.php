@extends('layouts.app-landing')

@section('content')

  <section id="planes" class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-4xl sm:text-3xl lg:text-5xl font-bold">
          <span class="tracking-wide">SERVICIO </span>
          <span class="text-primary">WIRELESS</span>
        </h1>
        <p
          class="pt-6 text-md md:text-base text-gray-400 font-normal w-full px-8 md:w-full"
        >
          Descubre nuestras opciones de planes diseñadas para satisfacer tus
          necesidades.
        </p>
      </div>
      <h1 class="text-xl sm:text-xl lg:text-2xl font-bold mx-auto mb-8">
        <span class="tracking-wide"
          >Los siguientes precios aplican para
        </span>
        <span class="text-primary">RENTA DE EQUIPO</span>
      </h1>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/3 md:w-1/3 w-full">
          <div
            class="h-full p-6 rounded-lg border-2 border-third flex flex-col relative overflow-hidden"
          >
            <h2
              class="text-sm tracking-widest title-font mb-1 font-medium text-third"
            >
              PLAN BÁSICO
            </h2>
            <h1
              class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200"
            >
              <span>$450</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 10 Mbps (Descarga)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 5 Mbps (Subida)
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Internet Ilimitado
            </p>
            <button
              class="flex items-center mt-auto text-white background-third border-0 py-2 px-4 w-full focus:outline-none rounded"
            >
              CONTRATAR
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-4 h-4 ml-auto"
                viewBox="0 0 24 24"
              >
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">
              Sujeto a cambios sin previo aviso.
            </p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/3 w-full">
          <div
            class="h-full p-6 rounded-lg border-2 border-primary flex flex-col relative overflow-hidden"
          >
            <span
              class="background-primary text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl"
              >POPULAR</span
            >
            <h2
              class="text-sm tracking-widest title-font mb-1 font-medium text-primary"
            >
              PLAN PLUS
            </h2>
            <h1
              class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200"
            >
              <span>$550</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 15 Mbps (Descarga)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>
              Hasta 5 Mbps (Subida)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Internet Ilimitado
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Soporte Técnico
            </p>
            <button
              class="flex items-center mt-auto text-white background-primary border-0 py-2 px-4 w-full focus:outline-none"
            >
              CONTRATAR
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-4 h-4 ml-auto"
                viewBox="0 0 24 24"
              >
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">
              Sujeto a cambios sin previo aviso.
            </p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/3 w-full">
          <div
            class="h-full p-6 rounded-lg border-2 border-third flex flex-col relative overflow-hidden"
          >
            <h2
              class="text-sm tracking-widest title-font mb-1 font-medium text-third"
            >
              PLAN PREMIUM
            </h2>
            <h1
              class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200"
            >
              <span>$650</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 20 Mbps (Descarga)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>
              Hasta 5 Mbps (Subida)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Internet Ilimitado
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>
              Soporte Técnico
            </p>
            <button
              class="flex items-center mt-auto text-white background-third border-0 py-2 px-4 w-full focus:outline-none rounded"
            >
              CONTRATAR
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-4 h-4 ml-auto"
                viewBox="0 0 24 24"
              >
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">
              Sujeto a cambios sin previo aviso.
            </p>
          </div>
        </div>
      </div>

      <h1
        class="text-xl sm:text-xl lg:text-2xl font-bold mx-auto md:mt-10 my-8"
      >
        <span class="tracking-wide"
          >Los siguientes precios aplican para
        </span>
        <span class="text-primary">COMPRA DE EQUIPO</span>
      </h1>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/3 md:w-1/3 w-full">
          <div
            class="h-full p-6 rounded-lg border-2 border-third flex flex-col relative overflow-hidden"
          >
            <h2
              class="text-sm tracking-widest title-font mb-1 font-medium text-third"
            >
              PLAN BÁSICO
            </h2>
            <h1
              class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200"
            >
              <span>$350</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 10 Mbps (Descarga)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 5 Mbps (Subida)
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Internet Ilimitado
            </p>
            <button
              class="flex items-center mt-auto text-white background-third border-0 py-2 px-4 w-full focus:outline-none rounded"
            >
              CONTRATAR
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-4 h-4 ml-auto"
                viewBox="0 0 24 24"
              >
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">
              Sujeto a cambios sin previo aviso.
            </p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/3 w-full">
          <div
            class="h-full p-6 rounded-lg border-2 border-third flex flex-col relative overflow-hidden"
          >
            <h2
              class="text-sm tracking-widest title-font mb-1 font-medium text-third"
            >
              PLAN PLUS
            </h2>
            <h1
              class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200"
            >
              <span>$450</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 10 Mbps (Descarga)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 5 Mbps (Subida)
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-third text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Internet Ilimitado
            </p>
            <button
              class="flex items-center mt-auto text-white background-third border-0 py-2 px-4 w-full focus:outline-none rounded"
            >
              CONTRATAR
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-4 h-4 ml-auto"
                viewBox="0 0 24 24"
              >
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">
              Sujeto a cambios sin previo aviso.
            </p>
          </div>
        </div>
        <div class="p-4 xl:w-1/3 md:w-1/3 w-full">
          <div
            class="h-full p-6 rounded-lg border-2 border-primary flex flex-col relative overflow-hidden"
          >
            <span
              class="background-primary text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl"
              >POPULAR</span
            >
            <h2
              class="text-sm tracking-widest title-font mb-1 font-medium text-primary"
            >
              PLAN PREMIUM
            </h2>
            <h1
              class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200"
            >
              <span>$550</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
            </h1>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Hasta 15 Mbps (Descarga)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>
              Hasta 5 Mbps (Subida)
            </p>
            <p class="flex items-center text-gray-600 mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Internet Ilimitado
            </p>
            <p class="flex items-center text-gray-600 mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center background-primary text-white rounded-full flex-shrink-0"
              >
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2.5"
                  class="w-3 h-3"
                  viewBox="0 0 24 24"
                >
                  <path d="M20 6L9 17l-5-5"></path>
                </svg> </span
              >Soporte Técnico
            </p>
            <button
              class="flex items-center mt-auto text-white background-primary border-0 py-2 px-4 w-full focus:outline-none"
            >
              CONTRATAR
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-4 h-4 ml-auto"
                viewBox="0 0 24 24"
              >
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">
              Sujeto a cambios sin previo aviso.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cobertura" class="mx-auto max-w-7xl py-4 lg:py-0 lg:mt-10 px-6 xl:px-0">
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 items-center justify-center">
        <div class="flex-1 bg-white rounded-lg order-2 md:order-2 lg:order-1 mt-4 pt-8">
            <div class="relative px-4">
                <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>
                <div class="flex items-center w-full mb-6 -ml-1.5">
                    <div class="w-1/12 z-10">
                        <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                    </div>
                    <div class="w-11/12">
                        <p class="text-sm">Lomas de Córdoba.</p>
                        <p class="text-xs text-gray-500">
                            Almería, Cordillera, Guadalquivir, Santaella, Los Villares.
                        </p>
                    </div>
                </div>
                <div class="flex items-center w-full my-6 -ml-1.5">
                    <div class="w-1/12 z-10">
                        <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                    </div>
                    <div class="w-11/12">
                        <p class="text-sm">Las Concordias.</p>
                    </div>
                </div>
                <div class="flex items-center w-full my-6 -ml-1.5">
                    <div class="w-1/12 z-10">
                        <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                    </div>
                    <div class="w-11/12">
                        <p class="text-sm">Los Agaves .</p>
                    </div>
                </div>
                <div class="flex items-center w-full my-6 -ml-1.5">
                    <div class="w-1/12 z-10">
                        <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                    </div>
                    <div class="w-11/12">
                        <p class="text-sm">Residencial San Juan .</p>
                    </div>
                </div>
            </div>
        </div>
  
        <div class="order-1 md:w-full md:order-1 md:col-span-2 lg:col-span-1 lg:order-2 text-center">
            <p class="text-white py-1 px-2 text-lg font-bold text-primary tracking-widest">
                ZONAS DE
            </p>
            <div class="font-bold w-full mb-6 mt-1">
                <p class="text-3xl sm:text-2xl lg:text-4xl">
                   COBERTURA
                </p>
            </div>
            <div class="text-base text-gray-400 font-normal w-full">
                Con una amplia infraestructura, aseguramos una conexion estable
                incluso en las zonas mas remotas. ¡Conectate con nosotros!
            </div>
            
        </div>
  
        <div class="order-3 md:order-3 lg:order-3">
            <div class="flex-1 bg-white rounded-lg mt-4">
                <div class="relative px-4">
                    <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>
  
                    <div class="flex items-center w-full my-6 -mr-1.5">
                        <div class="w-11/12 align-end">
                            <p class="text-sm">Residencial Sierra Nogal.</p>
                            <p class="text-xs text-gray-500">Nogal, Teca, Ébano</p>
                        </div>
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                        </div>
                    </div>
  
                    <div class="flex items-center w-full my-6 -mr-1.5">
                        <div class="w-11/12 align-end">
                            <p class="text-sm">Privadas San Pablo.</p>
                        </div>
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                        </div>
                    </div>
  
                    <div class="flex items-center w-full my-6 -mr-1.5">
                        <div class="w-11/12 align-end">
                            <p class="text-sm">Rivera de la Morena.</p>
                        </div>
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                        </div>
                    </div>
  
                    <div class="flex items-center w-full my-6 -mr-1.5">
                        <div class="w-11/12 align-end">
                            <p class="text-sm">Riviera del Sol.</p>
                        </div>
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                        </div>
                    </div>
  
                    <div class="flex items-center w-full my-6 -mr-1.5">
                        <div class="w-11/12 align-end">
                            <p class="text-sm">Hacienda los Tulipanes.</p>
                        </div>
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 background-primary rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

@extends('layouts.app-landing')

@section('content')
  <section id="planes" class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-4xl sm:text-3xl lg:text-5xl font-bold">
          <span class="tracking-wide">Planes </span>
          <span class="text-primary">Flexibles</span>
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
@endsection

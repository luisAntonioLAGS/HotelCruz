<div>
    <style>
        .active{
            background-color: grey;
            color:white;
            border-radius: 5px;
            padding: 10px;
            margin-top: 0px;

        }
    </style>
    <nav class="bg-[#0A1E4C]" x-data="{ open: false }">

        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

          <div class="relative flex h-16 items-center justify-between">

            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

              <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Abrir Menu</span>
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />

                </svg>
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />

                </svg>

              </button>

            </div>

            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">

              <div class="flex flex-shrink-0 items-center">

                <img class="block h-12 w-auto lg:hidden" src="{{ asset('img/Logo2.png') }}" alt="Hotel Santa cruz en juchitan">

                <img class="hidden h-16 w-auto lg:block" src="{{ asset('img/logo2.png') }}" alt="Hoteles en juchitan">

              </div>

              <div class="hidden sm:ml-6 sm:block">

                <div class="flex space-x-4 uppercase mt-3">

                 <a class="{{ (request()->routeIs("inicio")) ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{ route("inicio") }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home
                </a>

                <a class="{{ (request()->routeIs("habitaciones")) ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{ route("habitaciones") }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">habitaciones
                </a>
                <a class="{{ (request()->routeIs("concepto")) ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{ route("concepto") }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Concepto
                </a>
                <a class="{{ (request()->routeIs("juchitan")) ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{ route("juchitan") }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Juchitán
                </a>
                <a class="{{ (request()->routeIs("salones")) ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{ route("salones") }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Salones
                </a>
                <a class="{{ (request()->routeIs("contacto")) ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{ route("contacto") }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Contacto
                </a>
                <a class="{{ (request()->routeIs("reservar")) ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{ route("reservar") }}" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Reservar
                </a>
                  <a href="{{ route("login") }}" type="button" class="rounded-md bg-indigo-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sm:hidden" id="mobile-menu" x-show="open" x-on:click.away="open = false">

          <div class="space-y-1 px-2 pb-3 pt-2">

            <a href="{{ route("inicio") }}" class=" text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>

            <a href="{{ route("habitaciones") }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Habitaciones</a>

            <a href="{{ route("concepto") }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Concepto</a>

            <a href="{{ route("juchitan") }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Juchitán</a>
            <a href="{{ route("salones") }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Salones</a>
            <a href="{{ route("contacto") }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">contacto</a>
            <a href="{{ route("reservar") }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reservar</a>
            <a href="{{ route("login") }}" type="button" class="rounded-md bg-indigo-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 block">Login</a>
          </div>
        </div>
      </nav>
</div>

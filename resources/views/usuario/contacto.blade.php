<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/jpg" href="https://www.hotelsantacruzjuchitan.com/img/layout/main_logo.png"/>
    <title>Contacto</title>
</head>
@livewire("Navegacion")
<body>
    <div class="bg-white py-24 sm:py-26">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contacto</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Nuestro trabajo es hacer que su estancia en Hotel Santa Cruz Juchitán sea la mejor experiencia de viaje que haya tenido. Nos complace escuchar sus solicitudes y reservaciones, por favor escríbanos a través de nuestro formulario de contacto y en breve nos contactaremos para ayudarle.</p>
          </div>
          <img class="mx-auto max-w-2xl sm:text-center mt-12" src="{{ asset("img/flores.png") }}">
        </div>
    </div>
<!----------------------------------------------------->
<form class="w-full max-w-sm mx-auto px-6 lg:px-8 bg-[#CAEAF8] py-20">
    <h2 class="mt-2 text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">Formulario de contacto</h2>
    <div class="mt-8">
        <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Nombre Completo</label>
        <div class="relative mt-2 rounded-md shadow-sm">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
              </svg>
          </div>
          <input type="text" name="Nombre" id="Nombre" class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ingrese su nombre completo">
        </div>
      </div>
    <div class="mt-6">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
        <div class="relative mt-2 rounded-md shadow-sm">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
              <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
            </svg>
          </div>
          <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Micorreo@example.com">
        </div>
      </div>
<div class="mt-6">
  <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Número telefonico</label>
  <div class="relative mt-2 rounded-md shadow-sm">
    <div class="absolute inset-y-0 left-0 flex items-center">
      <label for="country" class="sr-only">Pais</label>
      <select id="country" name="country" autocomplete="country" class="h-full rounded-md border-0 bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
        <option>MX</option>
        <option>CA</option>
        <option>EU</option>
      </select>
    </div>
    <input type="text" name="phone-number" id="phone-number" class="block w-full rounded-md border-0 py-1.5 pl-16 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="+55 (555) 987-6543">
  </div>
  <div class="mt-8">
    <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
    <div class="relative mt-2 rounded-md shadow-sm">
      <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
          </svg>
      </div>
      <input type="text" name="Nombre" id="Nombre" class="block w-full rounded-md border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ingrese su Dirección">
    </div>
  </div>
<div class="mt-6">
    <label for="comment" class="block text-sm font-medium leading-6 text-gray-900">Escribenos un mensaje</label>
    <div class="mt-2">
      <textarea rows="4" name="comment" id="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
    </div>
  </div>
</div>
    <div class="md:flex text-end mt-6">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">

    ENVIAR SOLICITUD

        </button>
      </div>
    </div>
  </form>

</body>
<div class="py-14"></div>
@livewire("pie")
</html>

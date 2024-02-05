<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/jpg" href="https://www.hotelsantacruzjuchitan.com/img/layout/main_logo.png"/>
    <title>Reservar</title>
</head>
@livewire("Navegacion")
<body>
    <div class="relative bg-white">
        <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
          <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
            <div class="mx-auto max-w-2xl lg:mx-0">
              <h1 class="mt-24 text-2xl font-bold tracking-tight text-gray-900 sm:mt-10 sm:text-4xl">RESERVACIONES:
                Encuentra la habitación ideal.</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600">Descubra un espacio reacondicionado con detalles artísticos que hacen de su día una experiencia armónica y placentera. Colores llamativos, texturas y figuras características de la región brindan una atmosfera tradicional a su estancia. </p>
            </div>
          </div>
          <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
            <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full" src="{{ asset("img/Reservacion.jpg") }}" alt="">
          </div>
        </div>
      </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl sm:text-center">
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Solicitud de Reservación</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Envíanos tu solicitud de reservación a través del siguiente formulario y encuentra los mejores precios y ofertas disponibles para tu próxima estancia en el Hotel Santa Cruz Juchitán. </p>
          </div>
        </div>
<!------------------------------------------------------------------------------->
<form class="mt-12 bg-[#caeaf8] py-16">
    <div class="space-y-12 mx-8">
      <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
        <div>
          <h2 class="text-base font-semibold leading-7 text-gray-900">Información personal</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">Todos sus datos seran protegidos.</p>
        </div>

        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre:</label>
            <div class="mt-2">
              <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Apellidos:</label>
            <div class="mt-2">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email:</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
    <div class="sm:col-span-4">
    <label for="phone-number" class="block text-sm font-medium leading-6 text-gray-900">Telefono:</label>
    <div class="relative mt-2 rounded-md shadow-sm">
      <div class="absolute inset-y-0 left-0 flex items-center">
        <label for="country" class="sr-only">Pais</label>
        <select id="country" name="country" autocomplete="country" class="h-full rounded-md border-0 bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
          <option>MX</option>
          <option>EU</option>
          <option>Ca</option>
        </select>
      </div>
      <input type="text" name="number" id="number" class="block w-full rounded-md border-0 py-1.5 pl-16 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="+55 (555) 987-6543">
    </div>
  </div>
 </div>
</div>
<!----------------------------------------------------------------------------->
<div class="space-y-12 mx-8">
    <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
      <div>
        <h2 class="text-base font-semibold leading-7 text-gray-900">Información de Reservacion</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Todos sus datos seran protegidos.</p>
      </div>

      <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
        <div class="sm:col-span-3">
          <label for="habitaciones" class="block text-sm font-medium leading-6 text-gray-900">Número de Habitaciones:</label>
          <select id="habitaciones" name="habitaciones" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <option>1 Habitación</option>
            <option selected>2 Habitaciones</option>
            <option>3 Habitaciones</option>
          </select>
        </div>

        <div class="sm:col-span-3">
            <label for="tipo" class="block text-sm font-medium leading-6 text-gray-900">Tipo de Habitación:</label>
            <select id="tipo" name="tipo" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option>Habitación King</option>
              <option selected>Habitación Doble</option>
              <option>Habitación Familiar</option>
            </select>
          </div>

        <div class="sm:col-span-3">
            <div class="mt-4">
                <label class="block text-sm font-medium leading-6 text-gray-900" for="fecha">Fecha de Entrada:</label>
                <input class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" type="date" id="fecha" name="fecha" class="mt-1 p-2 border rounded-md">
              </div>
        </div>
        <div class="sm:col-span-3">
            <div class="mt-4">
                <label class="block text-sm font-medium leading-6 text-gray-900" for="fecha">Fecha de Salida:</label>
                <input class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6" type="date" id="fecha" name="fecha" class="mt-1 p-2 border rounded-md">
              </div>
        </div>
        <div class="sm:col-span-3">
            <label for="habitaciones" class="block text-sm font-medium leading-6 text-gray-900">Número de Adultos:</label>
            <select id="habitaciones" name="habitaciones" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option selected>1 Adulto</option>
              <option>2 Adultos</option>
              <option>3 Adultos</option>
              <option>4 Adultos</option>
            </select>
          </div>

          <div class="sm:col-span-3">
              <label for="tipo" class="block text-sm font-medium leading-6 text-gray-900">Número de Menores:</label>
              <select id="tipo" name="tipo" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option>Sin Menores</option>
                <option selected>1 Menor</option>
                <option>2 Menores</option>
                <option>3 Menores</option>
                <option>4 Menores</option>
              </select>
            </div>
</div>
</div>
    <div class="mt-4 flex items-center justify-end gap-x-6">
      <button type="submit" class="rounded-md bg-[#0A1E4C] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar Solicitud</button>
    </div>
</div>
</div>
  </form>
</body>
@livewire("pie")
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/jpg" href="https://www.hotelsantacruzjuchitan.com/img/layout/main_logo.png"/>
    <title>Habitaciones</title>
</head>
@livewire("Navegacion")
<body>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Un ambiente único diseño mexicano.</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Hemos creado un ambiente único con diseño tradicional mexicano. La simplicidad y lujo del Hotel Santa Cruz Juchitán crea una atmósfera confortable durante tu estancia; un espacio lleno de tradiciones y color, donde la privacidad que te ofrecemos se conjuga con el profundo sentido de hospitalidad de nuestro personal. </p>
          </div>
        </div>
      </div>
      <!--------------Habitacion king----->
      <div class="bg-white">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-18 sm:px-6 sm:py-30 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div class="grid gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('img/king.jpg') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
              </div>
          <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Habitación King</h2>
            <p class="mt-4 text-gray-500">Habitación disponible con una cama tipo king size para 2 personas. Su diseño brinda tranquilidad y descanso durante su viaje. Incluye amenidades que harán de su estancia más cómoda y placentera. </p>

            <dl class="mt-12 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-14 lg:gap-x-8">
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Desayuno buffet</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Aire Acondicionado</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Agua Caliente</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">TV por cable</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Baño privado</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Internet</dt>
              </div>
            </dl>
          </div>
          <a class="rounded-md bg-[#0A1E4C] px-2.5 py-4 text-sm font-semibold text-white shadow-sm hover:bg-[#0A74B9] focus-visible:outline focus-visible:outline-2 text-center focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reservar Habitación</a>
        </div>
      </div>
      <!-----------------Habitacion Double--------------------->
      <div class="bg-white my-20">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-18 sm:px-6 sm:py-30 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
          <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Habitación Doble</h2>
            <p class="mt-4 text-gray-500">La habitación Doble tiene disponible dos camas matrimoniales hasta para 4 personas, lo que le brinda un espacio más amplio, fresco y acogedor durante su estancia. </p>

            <dl class="mt-12 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-14 lg:gap-x-8">
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Desayuno buffet</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Aire Acondicionado</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Agua Caliente</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">TV por cable</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Baño privado</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Internet</dt>
              </div>
            </dl>

          </div>

          <div class="grid gap-4 sm:gap-6 lg:gap-8">
            <img src="{{ asset('img/double.jpg') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
          </div>
          <a class="rounded-md bg-[#0A1E4C] px-2.5 py-4 text-sm font-semibold text-white shadow-sm hover:bg-[#0A74B9] focus-visible:outline focus-visible:outline-2 text-center focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reservar Habitación</a>
        </div>
      </div>
      <!-------------------------Habitacion Familiar--------------------->
      <div class="bg-white mt-20 ">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-18 sm:px-6 sm:py-30 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div class="grid gap-4 sm:gap-6 lg:gap-8">
                <img src="{{ asset('img/king.jpg') }}" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
              </div>
          <div>
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Habitacion Familiar</h2>
            <p class="mt-4 text-gray-500">Cada una de las habitaciones cuentan con dos camas Matrimoniales y una cama King size hospedando hasta 6 personas. En esta habitación los huéspedes tendrán el mejor alojamiento para la convivencia familiar o viajes grupales.</p>

            <dl class="mt-12 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-14 lg:gap-x-8">
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Desayuno buffet</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">2 baños completos</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">2 Aires Acondicionados</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">TV por cable</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Agua caliente</dt>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dt class="font-medium text-gray-900">Internet</dt>
              </div>
            </dl>
          </div>
          <a class="rounded-md bg-[#0A1E4C] px-2.5 py-4 text-sm font-semibold text-white shadow-sm hover:bg-[#0A74B9] focus-visible:outline focus-visible:outline-2 text-center focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reservar Habitación</a>
        </div>
      </div>
</body>
<div class="py-16"></div>
@livewire("pie")
</html>

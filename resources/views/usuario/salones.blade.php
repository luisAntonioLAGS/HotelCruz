<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/jpg" href="https://www.hotelsantacruzjuchitan.com/img/layout/main_logo.png"/>
    <title>Salones</title>
</head>
@livewire("Navegacion")
<body>
    <div class="bg-gray-900">
        <div class="relative isolate overflow-hidden pt-14">
          <img src="{{ asset('img/Salones.jpg') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
          <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(80%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[80deg] bg-gradient-to-tr from-[#000000] to-[#010016] opacity-60 sm:left-[calc(80%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
          <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-46">
            <div class="text-center">
              <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Reserva un salón</h1>
              <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="https://hotelsantacruz.gabsuite.com/rooms.php" class="rounded-md bg-[#0A1E4C] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-800">Reservar</a>
              </div>
            </div>
          </div>
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>
<!-------------------------------->
<div class="overflow-hidden bg-white py-24 sm:py-26">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-2">
          <div class="lg:max-w-lg">
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Grupos</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">En el Hotel Santa Cruz Juchitán todo se ha pensado para brindarle a nuestros huéspedes toda una experiencia durante estancia y evento. Nuestro equipo de profesionales está altamente capacitado para brindarle asistencia personalizada para su grupo.</p>

            <p class="mt-6 text-lg leading-8 text-gray-600">Nuestra misión es lograr crear recuerdos inolvidables en cada uno de sus eventos realizados en el Hotel Santa Cruz Juchitán. </p>
          </div>
        </div>
        <img src=" {{ asset ("img/eventos.jpg") }} " alt="Eventos en juchitan" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[37rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
      </div>
    </div>
  </div>

<!------------------------------------------------------------->
<div class="bg-white">
    <main class="isolate">
      <div class="mx-auto mt-16 max-w-7xl sm:mt-24 sm:px-6 lg:px-8">
        <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-20 text-center shadow-2xl sm:rounded-3xl sm:px-16">
          <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Para su Evento</h2>
          <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">Nuestro salón y área al aire libre cuentan con todas las instalaciones y servicios disponibles para un evento.</p>
          <div class="absolute -top-24 right-0 -z-10 transform-gpu blur-3xl" aria-hidden="true">
            <div class="aspect-[1404/767] w-[87.75rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
          </div>
        </div>
      </div>
<!-------------------------------------------------->
<div class="overflow-hidden bg-white py-24 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:ml-auto lg:pl-4 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Salones</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">El Hotel Santa Cruz Juchitán cuenta con la infraestructura, logística y equipo técnico para brindarle servicios que garanticen que su evento será un éxito con sus invitados.</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">La amplitud del salón, equipo de audio e iluminación, servicio de café y bocadillos, actividades de entretenimiento, logística y recepción de sus invitados son solo algunos de los servicios que ponemos a sus disponibilidad.</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Si requiere de una cotización para su evento, póngase en contacto con el equipo para asesorarlo en todo lo que necesite.</p>

          </div>
        </div>
        <div class="flex items-start justify-end lg:order-first">
          <img src="{{ asset("img/flores.jpg") }}"  alt="Salones en renta" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[37rem]" width="2432" height="1442">
        </div>
      </div>
    </div>
  </div>
  <!------------------------------->
      <div class="mt-27 overflow-hidden sm:mt-26">
        <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
            <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Montajes</h2>
              <p class="mt-6 text-xl leading-8 text-gray-600">El Hotel Santa Cruz Juchitán le ofrece instalaciones y servicios complementarios para todo evento especial. Con la clara idea de obtener la mejor disposición del espacio en el salón de eventos, se han definido montajes e ideas de decoración que pueden servirle de apoyo en su evento. </p>
            </div>
            <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
              <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                <img src="{{ asset ("img/montajes.jpg") }}" alt="Montajes en juchitan" class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
              </div>
              <div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
              </div>
            </div>
          </div>
        </div>
      </div>
<!--------------------------------------------------------->
<div class="overflow-hidden bg-white py-24 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:ml-auto lg:pl-4 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Especialistas</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">En el Hotel Santa Cruz Juchitán le brinda la facilidad de poder hospedar a sus invitados y planear su evento en su salón o área libre con la garantía de ser todo un éxito. Logre reunir a sus invitados en un lugar tranquilo, seguro y cercano a su evento. </p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Nuestra amplia experiencia nos hace especialistas eventos; nuestro equipo de profesionales ha realizado reuniones, retiros, bodas, bautizos, convenciones, organización de eventos y recepción de grupos, que estamos seguros. </p>
          </div>
        </div>
        <div class="flex items-start justify-end lg:order-first">
          <img src="{{ asset("img/salonesenrenta.jpg") }}"  alt="Salones en renta" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[37rem]" width="2432" height="1442">
        </div>
      </div>
    </div>
  </div>
  <!---------------------->
  <div class="mx-auto mt-20 max-w-7xl px-6 sm:mt-26 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Navega con nosotros</h2>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
        <img src="{{ asset ("img/room.jpg") }}" alt="Habitaciones para dormir" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
          <a href="">
            <span class="absolute inset-0"></span>
            Ver Habitaciones
          </a>
        </h3>
      </article>
      <article class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
        <img src="{{ asset ("img/juchitanflores.jpg") }}" alt="Juchitan de las flores" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
          <a href="#">
            <span class="absolute inset-0"></span>
            Visita Juchitán
          </a>
        </h3>
      </article>
    </div>
  </div>

</body>
<div class="py-20"></div>
@livewire("pie")
</html>

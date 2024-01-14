<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/jpg" href="https://www.hotelsantacruzjuchitan.com/img/layout/main_logo.png"/>
    <title>Inicio</title>
</head>
@livewire("Navegacion")
<div class="bg-white">
    <div class="relative">
      <div class="mx-auto max-w-7xl">
        <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
          <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="0,0 90,0 50,100 0,100" />
          </svg>
          <div class="relative px-6 py-20 sm:py-40 lg:px-8 lg:py-30 lg:pr-0">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
              <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Hotel Santa Cruz</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600">Tu descanso es nuestra prioridad.</p>
              <div class="mt-10 flex items-center gap-x-6">
                <a href="#" class="rounded-md bg-[#005279] px-8 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#24567E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Reservar Habitación</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full" src="{{ asset('img/Hotelsantacruz.jpg') }}"  alt="Hoteles y Cuartos en juchitan">
      </div>
    </div>
  </div>
  <!--------------------Seccion Servicios------------------------>
  <div class="bg-gray-900 py-20 sm:py-26">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:max-w-none">
        <div class="text-center">
          <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Tenemos un exelente servicio</h2>
        </div>
        <dl class="mt-14 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
          <div class="flex flex-col bg-white/5 p-8">
            <dd class="order-first text-2xl font-semibold tracking-tight text-white">Estacionamiento</dd>
          </div>
          <div class="flex flex-col bg-white/5 p-8">
            <dd class="order-first text-2xl font-semibold tracking-tight text-white">Restaurante</dd>
          </div>
          <div class="flex flex-col bg-white/5 p-8">
            <dd class="order-first text-2xl font-semibold tracking-tight text-white">Alberca</dd>
          </div>
          <div class="flex flex-col bg-white/5 p-8">
            <dd class="order-first text-2xl font-semibold tracking-tight text-white">Area de eventos</dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
  <!-------------------------------Sobre nosotros---------------------->
  <div class="overflow-hidden bg-white py-24 sm:py-30">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:ml-auto lg:pl-4 lg:pt-4">
        <div class="lg:max-w-lg">
          <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Pasa una noche de descanso y tradición.</h2>
          <p class="mt-6 text-lg leading-8 text-gray-600">El Hotel Santa Cruz mantienen vivo un ambiente de tranquilidad y confort en cada rincón. El espacio se encuentra en constante reacondicionamiento y mantenimiento, agregamos detalles artísticos para hacer de su estancia una experiencia armónica y placentera.</p>
          <p class="mt-6 text-lg leading-8 text-gray-600">
            La habitación Doble tiene disponible dos camas matrimoniales hasta para 4 personas, lo que le brinda un espacio más amplio, fresco y acogedor durante su estancia.
          </p>
        </div>
      </div>
      <div class="flex items-start justify-end lg:order-first">
        <img src="{{ asset('img/Tehuantepec.jpg') }}"
        alt="Product screenshot" class="w-[46rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[52rem]" width="2432" height="1442">
      </div>
    </div>
  </div>
</div>

  <!---------------------------Seccion Habitaciones ---------------------->
  <div class="bg-white py-24 md:py-26 lg:py-35">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nuestras habitaciones</h2>
        <p class="mt-6 text-lg leading-8 text-gray-600 text-justify">Bienvenido a nuestro exclusivo hotel, donde la excelencia y la limpieza se fusionan para una experiencia inolvidable. Desde el cálido recibimiento hasta las habitaciones meticulosamente limpias, cada detalle refleja nuestro compromiso con la calidad. </p>
        <div class="mt-10 flex items-center gap-x-6">
            <a href="#" class="rounded-md bg-[#005279] px-8 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-[#24567E] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 item-center">Ver habitaciones</a>
          </div>
      </div>
      <ul role="list" class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 xl:col-span-2">
        <li>
          <img class="aspect-[3/2] w-full rounded-2xl object-cover" src="{{ asset('img/king.jpg') }}" alt="Habitaciones en juchitán">
          <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">Habitación King</h3>
          <p class="mt-4 text-base leading-7 text-gray-600">Habitación disponible con una cama tipo king size para 2 personas. Su diseño brinda tranquilidad y descanso durante su viaje. Incluye amenidades que harán de su estancia más cómoda y placentera.</p>

        </li>
        <li>
          <img class="aspect-[3/2] w-full rounded-2xl object-cover" src="{{ asset('img/double.jpg') }}" alt="Habitaciones en juchitán">
          <h3 class="mt-6 text-lg font-semibold leading-8 text-gray-900">habitación Doble</h3>
          <p class="mt-4 text-base leading-7 text-gray-600">La habitación Doble tiene disponible dos camas matrimoniales hasta para 4 personas, lo que le brinda un espacio más amplio, fresco y acogedor durante su estancia.</p>
        </li>
      </ul>
    </div>
  </div>
<!----------------------------------------------------------->
<section class="bg-white px-6 py-18 sm:py-26 lg:px-8">
    <h2 class="mt-2 mb-8 text-4xl font-semibold leading-8 tracking-tight text-gray-900 sm:text-2xl sm:leading-9 text-center">¿Qué dicen los clientes?</h2>
    <figure class="mx-auto max-w-2xl">
      <p class="sr-only">Hotel 5 Estrellas</p>
      <div class="flex gap-x-1 text-[#F4CE00]">
        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
        </svg>
        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
        </svg>
        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
        </svg>
        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
        </svg>
        <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
        </svg>
      </div>
      <blockquote class="mt-10 text-xl font-semibold leading-8 tracking-tight text-gray-900 sm:text-2xl sm:leading-9">
        <p>“Es un hotel ubicado en la entrada de la ciudad, cerca de un mini mercado y Burger KING. El restaurante solo sirve desayunos. El establecimiento es nuevo y dispone de aparcamiento. ”</p>
      </blockquote>
      <figcaption class="mt-10 flex items-center gap-x-6">
        <img class="h-12 w-12 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <div class="text-sm leading-6">
          <div class="font-semibold text-gray-900">Champasak, Lyon, Francia.</div>
        </div>
      </figcaption>
    </figure>
    <h2 class="mt-2 mb-8 text-4xl font-semibold leading-8 tracking-tight text-[#39AE4A] sm:text-2xl sm:leading-9 text-center underline"><a href="https://www.tripadvisor.com.mx/Hotel_Review-g12517856-d15761485-Reviews-Hotel_Santa_Cruz_Juchitan-Juchitan_de_Zaragoza_Southern_Mexico.html">Leer más</a></h2>
  </section>
  <!-----------------------Seccion Como llegar--->
  <div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Ubicación</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">¿Cómo llegar?</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Reconocidos mundialmente por la riqueza cultural del Istmo de Tehuantepec, nos encontramos ubicados en el estado de Oaxaca, al sur de México, a menos de una hora en avión de la capital de México y la ciudad de Oaxaca.</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">La cercanía de Juchitán con otras zonas destacadas de la región, como Huatulco, Salina Cruz, Minatitlán y Tuxtla Gutiérrez, lo hacen un destino único para disfrutar. </p>
          </div>
        </div>
        <img src="{{ asset('img/Mapa-Hotelsantacruz.png') }}" alt="Product screenshot" class="w-[32rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[38rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
      </div>
    </div>
  </div>
  @livewire("pie")
</html>

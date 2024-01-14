<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/jpg" href="https://www.hotelsantacruzjuchitan.com/img/layout/main_logo.png"/>
    <title>Juchitán</title>
</head>
@livewire("Navegacion")
<body>
    <div class="relative bg-white">
        <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
          <div class="px-6 pb-24 pt-10 sm:pb-32 lg:col-span-7 lg:px-0 lg:pb-56 lg:pt-48 xl:col-span-6">
            <div class="mx-auto max-w-2xl lg:mx-0">
              <div class="hidden sm:mt-32 sm:flex lg:mt-16">
              </div>
              <h1 class="mt-24 text-4xl font-bold tracking-tight text-gray-900 sm:mt-10 sm:text-6xl">Vive Juchitán</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600">
                Una ciudad que florece desde tiempos ancestrales y continúa viva en su gente con sus tradiciones y fiestas emblemáticas.</p>
              <div class="mt-10 flex items-center gap-x-6">
                <a href="#" class="rounded-md bg-[#0A1E4C] px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Planea Tu viaje</a>
              </div>
            </div>
          </div>
          <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
            <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full" src="{{ asset('img/juchitan.jpg') }}" alt="Juchitán de zaragoza Oaxaca">
          </div>
        </div>
      </div>
<!----------------------------------------------------------->
<div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">El Destino</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Juchitán es reconocido en México y en el mundo por su gente, cultura y tradiciones ancestrales. La fuerza de la ciudad se aprecia indudablemente en sus calles y comercios que saltan a la vista desde muy tempranas horas del día. Visitar Juchitán es sentir el reflejo de su cultura en cada paso, mujeres bellas con vestidos multicolor que atrapan la atención de propios y extranjeros. </p>
          </div>
        </div>
        <img src="{{ asset('img/juchitan-baile.jpg') }}" alt="Hoteles en juchitan" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
      </div>
    </div>
  </div>
  <!-----------------------IFRAME----->
<div class="py-4 text-center">
    <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Conoce Juchitán</h2>
</div>
  <div class="bg-[#0A1E4C] p-6 rounded-lg shadow-xl max-w-screen-lg mx-auto">
    <iframe class="block mx-auto" width="100%" height="415" src="https://www.youtube.com/embed/I2H6tNvK9QQ?si=SWFznYa4henCkgZ-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
<!--------------------------------------------------->
<div class="overflow-hidden bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:ml-auto lg:pl-4 lg:pt-4">
          <div class="lg:max-w-lg">
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Juchitán y sus
                fiestas tradicionales</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Juchitán es una ciudad donde las tradicionales fiestas, velas y sones istmeños se escuchan por todas sus calles al pasar. Visitar Juchitán es conocer el arte ancestral del bordado, probar sus dulces regionales, antojitos y aguas frescas; es admirar sus trajes tradicionales y sentir sus fiestas; es caminar por su mercado y admirar la tradición viva de una ciudad. </p>
          </div>
        </div>
        <div class="flex items-start justify-end lg:order-first">
          <img src="{{ asset('img/tradiciones.jpg') }}" alt="Hoteles comodos en juchitan" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442">
        </div>
      </div>
    </div>
  </div>
<!-------------------------------------------------------->
<div class="overflow-hidden bg-white py-22 sm:py-26">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                Ubicación
            </p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Conectividad </h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Reconocidos mundialmente por la riqueza cultural del Istmo de Tehuantepec, nos encontramos ubicados en el estado de Oaxaca, al sur de México, a menos de una hora en avión de la capital de México y de la capital de Oaxaca a través del Aeropuerto internacional de Huatulco y el Aeropuerto de Ciudad Ixtepec.
            </p>
            <p class="mt-6 text-lg leading-8 text-gray-600">La cercanía de Juchitán con otras zonas destacadas de la región, como Huatulco, Salina Cruz; Minatitlán, Veracruz; y Tuxtla Gutiérrez, Chiapas, lo hacen una ciudad de comercio y destino único para disfrutar.
            </p>
          </div>
        </div>
        <img src="{{ asset('img/Huatulco.jpg') }}" alt="Hoteles en el istmo" class="w-[68rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[42rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
      </div>
    </div>
  </div>
<!----------------------------------------->
<div class="overflow-hidden bg-white py-22 sm:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:ml-auto lg:pl-4 lg:pt-4">
          <div class="lg:max-w-lg">
            <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                Planea tus
            </p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Actividades</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Para nuestros huéspedes que quieren vivir de cerca Juchitán, su cultura y fiestas tradicionales, contamos con personal que puede orientarlos durante su visita para indicarle las mayores atractivos y recorridos imperdibles de la ciudad. Lugares que regalan historias inolvidables.
            </p>
            <ul class="mt-6 text-lg leading-8 text-gray-600">
                <li>Mercado 5 de Septiembre</li>
                <li>Visita al Parque Central</li>
                <li>Templo de San Vicente Ferrer</li>
                <li>Playa Vicente</li>
                <li>Degustación de dulces tradicionales</li>
                <li>Visita de Iguanario </li>
                <li>La Casa de la Cultura</li>
                <li>Tienda de trajes regionales</li>
                <li>Tienda de artesanías: alfarería y platería </li>
            </ul>
          </div>
        </div>
        <div class="flex items-start justify-end lg:order-first">
          <img src="{{ asset('img/regada.jpg') }}" alt="Hoteles comodos en juchitan" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442">
        </div>
      </div>
    </div>
  </div>
  <!--------------------------------------------------->
  <div class="overflow-hidden bg-white py-22 sm:py-26">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        <div class="lg:pr-8 lg:pt-4">
          <div class="lg:max-w-lg">
            <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">
                Reserva tu
            </p>
            <h2 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Siguiente viaje </h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Juchitán es la cuna de las mujeres más bellas, los trajes más coloridos y las fiestas más emblemáticas de Oaxaca. Gracias a su llamativa cultura, Juchitán es reconocido por tener las fiestas y bailes más atractivos para sus visitantes. Reserva tu habitación para tu próximo viaje y encuentra las mejores opciones de acuerdo a tus necesidades.
            </p>
          </div>
        </div>
        <img src="{{ asset('img/Fiesta-istmeña.jpg') }}" alt="Hoteles en el istmo" class="w-[68rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[42rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
      </div>
    </div>
  </div>
  <!--------------------------------------->
  <div class="bg-white">
    <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
      <div class="mx-auto max-w-4xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Lista de fiestas Tradicionales: Velas Istmeñas</h2>
        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">Durante todo el año se celebran 28 Velas , 16 de ellas en los últimos días de Abril y durante el mes de Mayo. Las fiestas tradicionales de Juchitán llamadas “Velas” se organizan desde 1857 por Decreto del entonces gobernador de Oaxaca Benito Juárez García quien ordenó tres días de fiesta en la comunidad de Juchitán y desde entonces las celebraciones han aumentado. </p>
        <ul class="mx-auto mt-2 max-w-xl text-lg leading-8 text-gray-600">
        <li>Vela “San Pedro Cantarito” </li>
        <li>Vela “Santa Cruz Guzebenda” </li>
        <li>Vela “Santa Cruz 3 de Mayo” </li>
        <li>Vela Jazmín</li>
        <li>Vela “Santa Cruz Guigú Dxita” </li>
        <li>Vela “Santa Cruz Pasión Quinto” </li>
        <li>Vela “Santa Cruz Guelabeñe” </li>
        <li>Vela “San Isidro Labrador Sur” </li>
        <li>Vela “Santa Crux Igú”</li>
        <li>Vela “Santa Cruz Biadxi”</li>
        <li>Vela “Santa Cruz Calvario” </li>
        <li>Vela “Santa Cruz Angélica Pipí” </li>
        <li>Vela “San Isidro Labrador Norte” </li>
        <li>Vela “San Vicente Chico” </li>
        <li>Vela “San Vicente Grande”</li>
        <li>Vela “Cheguigo”</li>
        </ul>
      </div>
    </div>
  </div>

</body>
@livewire("pie")
</html>

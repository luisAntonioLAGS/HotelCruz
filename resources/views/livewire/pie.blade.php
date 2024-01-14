<div>
    <div class="bg-[#0F2C6C] py-4 sm:py-25">
        <div class="relative isolate">
          <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mx-auto flex max-w-2xl flex-col gap-16 bg-white/5 px-6 py-16 ring-1 ring-white/10 sm:rounded-3xl sm:p-8 lg:mx-0 lg:max-w-none lg:flex-row lg:items-center lg:py-18 xl:gap-x-20 xl:px-20">
              <img class="h-96 w-full flex-none rounded-2xl object-cover shadow-xl lg:aspect-square lg:h-auto lg:max-w-sm" src="{{ asset('img/lamanosanta.png') }}" alt="">
              <div class="w-full flex-auto">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">¿Necesitas ayuda?</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">Si requiere de más información del Hotel Santa Cruz y sus instalaciones, por favor contáctenos a través de nuestra forma de contacto, nuestro equipo estará encantado de atenderlo.</p>
                <div class="mt-10 flex">
                    <a href="{{ route("contacto") }}" class="rounded-md bg-pink-600 px-8 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-pink-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Forma de Contacto</a>
                </div>
              </div>
            </div>
          </div>
          <div class="absolute inset-x-0 -top-16 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
          </div>
        </div>
      </div>
    <!-------------------Footer-------------------------->
    <footer class="bg-[#0F2C6C] bg-cover bg-center bg-no-repeat h-22" aria-labelledby="footer-heading" style="background-image: url('{{ asset('img/Frutas.png') }}'); background-size: 20%; background-position: bottom left;">
        <h2 id="footer-heading" class="sr-only">Footer</h2>

        <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-32">
          <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
              <div class="md:grid md:grid-cols-2 md:gap-8">
                <div >
                  <a href="{{ route("inicio") }}" class="text-sm font-semibold leading-4 text-white hover:bg-white hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Home</a>
                </div>
                <div class="mt-10 md:mt-0">
                  <a href="{{ route("habitaciones") }}" class="text-sm font-semibold leading-4 text-white hover:bg-white hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Habitaciones</a>
                </div>
              </div>
              <div class="md:grid md:grid-cols-2 md:gap-6">
                <div>
                  <a href="{{ route("concepto") }}" class="text-sm font-semibold leading-4 text-white hover:bg-white hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Concepto</a>
                </div>
                <div class="mt-10 md:mt-0">
                  <a href="juchitan" class="text-sm font-semibold leading-4 text-white hover:bg-white hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Juchitán</a>
                </div>
              </div>
              <div class="md:grid md:grid-cols-2 md:gap-6">
                <div>
                  <a href="salones" class="text-sm font-semibold leading-4 text-white hover:bg-white hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Salones</a>
                </div>
                <div class="mt-10 md:mt-0">
                  <a href="contacto" class="text-sm font-semibold leading-4 text-white hover:bg-white hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Contacto</a>
                </div>
              </div>
              <div class="md:grid md:grid-cols-2 md:gap-6">
                <div>
                  <a href="" class="text-sm font-semibold leading-4 text-white hover:bg-white hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Reservar</a>
                </div>
              </div>
            </div>
            <div class="mt-10 xl:mt-0">
              <h3 class="text-sm font-semibold leading-6 text-white">Subscribirse al boletin informativo</h3>
              <form class="mt-6 sm:flex sm:max-w-md">
                <label for="email-address" class="sr-only">Correo</label>
                <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border-0 bg-[#0f2c6c] px-3 py-1.5 text-base text-white shadow-sm ring-1 ring-inset ring-white/10 placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:w-64 sm:text-sm sm:leading-6 xl:w-full" placeholder="Suscribirse al boletín informativo">
                <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                  <a href="" type="submit" class="flex w-full items-center justify-center rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribirse</a>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 md:flex md:items-end md:justify-between lg:mt-24 text-end items-end">
            <div class="flex space-x-6 md:order-2 ml-auto">
              <a href="https://www.facebook.com/p/Hotel-Santa-Cruz-Juchit%C3%A1n-100064197302888/" class="text-white hover:text-gray-400" target="_blank">
                <span class="sr-only">Facebook</span>
                <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
              </a>
              <a href="https://wa.me/5219711372119" target="_blank" class="text-white hover:text-gray-400">
            <p class="h-12 w-12 mt-3 hover:text-green-600">WhatsApp</p>

              </a>
            </div>
          </div>

          <p class="mt-10 text-center font-greatvibes text-3xl leading-5 text-white">&copy; Hotel Santa Cruz</p>
        </div>
      </footer>
<div class=" inset-x-0 bottom-0">
    <div class="flex items-center gap-x-6 bg-[#2AAAE2] px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
      <p class="text-sm leading-6 text-white">
        <a href="#">
          <strong class="font-semibold">Aviso de privacidad</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg> <strong><a>políticas de Reservación y cancelación</a></strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>  <span aria-hidden="true"><strong><a>bydelamora.com</strong></a></span>
        </a>
      </p>
      <div class="flex flex-1 justify-end">
      </div>
    </div>
  </div>

    </html>

</div>

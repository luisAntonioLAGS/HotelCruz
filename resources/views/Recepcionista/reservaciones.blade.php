<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reservaciones</title>
        @vite('resources/css/app.css')
    </head>
    @livewire("vistarecepcion")
<div class="bg-gray-900 xl:pl-72">
    <div class="mx-auto max-w-7xl">
      <div class="bg-gray-900 py-10">
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
              <h1 class=" font-semibold leading-6 text-white text-3xl">Huéspedes</h1>
              <p class="mt-2 text-sm text-gray-300">Da de alta al huesped segun el correo recibido</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
              <a href="{{ route("registrocliente") }}" type="button" class="block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Agregar huesped</a>
            </div>
          </div>
          <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-700">
                  <thead>
                    <tr>
                      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">Nombre Completo</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Habitación</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Número de personas</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Status</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Fecha de entrada</th>
                      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Fecha de Salida</th>
                      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                        <span class="sr-only">Editar</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-800">
                    <tr>
                      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">Fito Lopez Lopez</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">223</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">2</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">Sin ocupar</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">10/10/2024</td>
                      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">19/10/2024</td>
                      <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                        <a href="#" class="text-indigo-400 hover:text-indigo-300">Editar</a>
                      </td>
                    </tr>

                    <!-- Mas Personas. -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

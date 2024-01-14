<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Clientes</title>
        @vite('resources/css/app.css')
    </head>
    @livewire("menuadministrador")
<div class="bg-gray-900 xl:pl-72">
    <div class="mx-auto max-w-7xl">
      <div class="bg-gray-900 py-10">
        <div class="px-4 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
              <h1 class=" font-semibold leading-6 text-white text-3xl">Lista de clientes</h1>
              <p class="mt-2 text-sm text-gray-300">Clientes registrados</p>
            </div>
          </div>
          <div
          class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-6 border-b border-white/5 bg-gray-900 px-4 shadow-sm sm:px-6 lg:px-8 mt-10">
          <button type="button" class="-m-2.5 p-2.5 text-white xl:hidden">
              <span class="sr-only"></span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                      d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                      clip-rule="evenodd" />
              </svg>
          </button>

          <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
              <form class="flex flex-1" action="#" method="GET">
                  <label for="search-field" class="sr-only">Buscar</label>
                  <div class="relative w-full">
                      <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-500"
                          viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd"
                              d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                              clip-rule="evenodd" />
                      </svg>
                      <input id="search-field"
                          class="block h-full w-full border-0 bg-transparent py-0 pl-8 pr-0 text-white focus:ring-0 sm:text-sm"
                          placeholder="Buscar..." type="search" name="search">
                  </div>
              </form>
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
                        <a href="#" class="text-indigo-400 hover:text-indigo-300">Recibo</a>
                      </td>
                    </tr>

                    <!-- MAS PERSONAS... -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

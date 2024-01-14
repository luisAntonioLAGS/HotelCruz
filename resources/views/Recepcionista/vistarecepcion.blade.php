<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
@livewire("vistarecepcion")

        <div class="xl:pl-72">
            <!-- Buscador -->
            <div
                class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-6 border-b border-white/5 bg-gray-900 px-4 shadow-sm sm:px-6 lg:px-8">
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

            <main>
                <header>
                    <nav class="flex overflow-x-auto border-b border-white/10 py-4">
                        <ul role="list"
                            class="flex min-w-full flex-none gap-x-6 px-4 text-sm font-semibold leading-6 text-gray-400 sm:px-6 lg:px-8">
                            <li>
                                <a href="#" class="text-indigo-400">Reportes</a>
                            </li>
                            <li>
                                <a href="#" class="">Facturas</a>
                            </li>

                        </ul>
                    </nav>
                    <div
                        class="flex flex-col items-start justify-between gap-x-8 gap-y-4 bg-gray-700/10 px-4 py-4 sm:flex-row sm:items-center sm:px-6 lg:px-8">
                        <a href=""
                            class="order-first flex-none rounded-full bg-indigo-600 px-2 py-2 text-md font-medium text-white ring-1 ring-inset ring-indigo-400/30 sm:order-none text">Crear
                            Reservación</a>
                    </div>

                    <!-- CUADROS-->
                    <div class="grid grid-cols-1 bg-gray-700/10 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="border-t border-white/5 py-6 px-4 sm:px-6 lg:px-8">
                            <p class="text-sm font-medium leading-6 text-gray-400">Habitaciones Disponibles</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">405</span>
                            </p>
                        </div>
                        <div class="border-t border-white/5 py-6 px-4 sm:px-6 lg:px-8 sm:border-l">
                            <p class="text-sm font-medium leading-6 text-gray-400">Reservaciones</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">7</span>
                            </p>
                        </div>
                        <div class="border-t border-white/5 py-6 px-4 sm:px-6 lg:px-8 lg:border-l">
                            <p class="text-sm font-medium leading-6 text-gray-400">Facturas realizadas</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">3</span>
                            </p>
                        </div>
                        <div class="border-t border-white/5 py-6 px-4 sm:px-6 lg:px-8 sm:border-l">
                            <p class="text-sm font-medium leading-6 text-gray-400">Reportes realizados</p>
                            <p class="mt-2 flex items-baseline gap-x-2">
                                <span class="text-4xl font-semibold tracking-tight text-white">98</span>
                            </p>
                        </div>
                    </div>
                </header>

                <!-- lista -->
                <div class="border-t border-white/10 pt-11">
                    <h2 class="px-4 text-base font-semibold leading-7 text-white sm:px-6 lg:px-8">Huespedes recientes:</h2>
                    <table class="mt-6 w-full whitespace-nowrap text-left">
                        <colgroup>
                            <col class="w-full sm:w-4/12">
                            <col class="lg:w-4/12">
                            <col class="lg:w-2/12">
                            <col class="lg:w-1/12">
                            <col class="lg:w-1/12">
                        </colgroup>
                        <thead class="border-b border-white/10 text-sm leading-6 text-white">
                            <tr>
                                <th scope="col" class="py-2 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8">Cliente</th>
                                <th scope="col" class="hidden py-2 pl-0 pr-8 font-semibold sm:table-cell">Habitación
                                </th>
                                <th scope="col" class="hidden py-2 pl-0 pr-8 font-semibold sm:table-cell">Status
                                </th>
                                <th scope="col"
                                    class="py-2 pl-0 pr-4 text-right font-semibold sm:pr-8 sm:text-left lg:pr-20">
                                    Fecha de entrada</th>
                                <th scope="col"
                                    class="hidden py-2 pl-0 pr-6 text-right font-semibold sm:table-cell sm:pr-6 lg:pr-6">
                                    Fecha de Salida</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            <tr>
                                <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
                                    <div class="flex items-center gap-x-4">
                                        <div class="truncate text-sm font-medium leading-6 text-white">Pablito Lopez Lopez
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
                                    <div class="flex gap-x-3">
                                        <div class="font-mono text-sm leading-6 text-gray-400">22</div>
                                    </div>
                                </td>
                                <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
                                    <div class="flex gap-x-3">
                                        <div class="font-mono text-sm leading-6 text-gray-400">En Uso</div>
                                    </div>
                                </td>
                                <td
                                    class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">
                                    <time datetime="2023-01-23T11:00">22/10/24</time>
                                </td>
                                <td
                                    class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
                                    <time datetime="2023-01-23T11:00">25/10/24</time>
                                </td>
                            </tr>

                            <!-- AGREGA MAS CLIENTES -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


</body>

</html>

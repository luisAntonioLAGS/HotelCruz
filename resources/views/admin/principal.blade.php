<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  @vite('resources/css/app.css')
</head>
@livewire("menuadministrador")

<body>
  @foreach($principal as $principal)
  <div class="xl:pl-72">
    <div class="mt-10">
      <h3 class="text-md ml-4 font-inter leading-6 text-white">Su Información del Dia de Hoy:</h3>

      <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
          <dt>
            <div class="absolute rounded-md bg-indigo-500 p-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                <path fill-rule="evenodd" d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
              </svg>

            </div>
            <p class="ml-16 truncate text-sm font-medium text-gray-500">Habitaciones ocupadas el dia de hoy:</p>
          </dt>
          <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">{{$principal->HabitacionesOcupadas}}</p>
            <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
            </div>
          </dd>
        </div>
        <!------------------------>
        <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
          <dt>
            <div class="absolute rounded-md bg-indigo-500 p-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
              </svg>

            </div>
            <p class="ml-16 truncate text-sm font-medium text-gray-500">Empleados faltantes el dia de hoy:</p>
          </dt>
          <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">{{$principal->Inasistencias}}</p>
            </p>
            <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="./asistencias" class="font-medium text-indigo-600 hover:text-indigo-500">Ver asistencias</a>
              </div>
            </div>
          </dd>
        </div>
        <!----------------------->
        <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
          <dt>
            <div class="absolute rounded-md bg-indigo-500 p-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
                <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875ZM9.75 17.25a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-.75Zm2.25-3a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-5.25Z" clip-rule="evenodd" />
                <path d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
              </svg>

            </div>
            <p class="ml-16 truncate text-sm font-medium text-gray-500">Total de clientes esta semana:</p>
          </dt>
          <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
            <p class="text-2xl font-semibold text-gray-900">{{$principal->ClientesModificadosUltimaSemana}}</p>
            <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
              <div class="text-sm">
                <a href="./clientesadmin" class="font-medium text-indigo-600 hover:text-indigo-500">Ver clientes</a>
              </div>
            </div>
          </dd>
        </div>
      </dl>
    </div>
    
    <!------------------------------------------------->
    <div class="px-4 sm:px-6 lg:px-8 mt-14">
      <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
          <h1 class="text-base font-semibold leading-6 text-white">Usuarios agregados recientemente</h1>
          <p class="mt-2 text-sm text-white"> Lista de usuarios: nombre, cargo, correo electrónico y rol.</p>
        </div>
      </div>
      <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                  <tr>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Clave Empleado</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nombre Completo</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Puesto</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Correo</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Estatus</th>
                    <!-- <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                      <span class="sr-only">Editar</span>
                    </th> -->
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                @foreach($infoEmpleados as $usuario)
                  <tr>
                  <td scope="col" class="whitespace-nowrap px-3 py-4 text-sm text-gray-5000">{{$usuario->ClaveEmpleado}}</td> 
                    <td scope="col" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$usuario->NombreEmpleado}}</td>
                    <td scope="col" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$usuario->NombrePuesto}}</td>
                    <td scope="col" class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$usuario->email}}</td>
                    <td scope="col" class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$usuario->EstatusUsuario}}</td>
                    <!-- <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                    </td> -->
                  </tr>
                  @endforeach

                  <!-- Mas personas-->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endforeach



</body>

</html>
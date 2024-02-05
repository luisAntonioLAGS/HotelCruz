<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Dashboard</title>
  @vite('resources/css/app.css')
</head>
@livewire("menuadministrador")

<body>
  <div class="xl:pl-72">
    <div class="bg-gray-900 py-10">
      <h2 class="px-4 text-base font-semibold leading-7 text-white sm:px-6 lg:px-8">Asistencias del dia de hoy:</h2>
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
            <th scope="col" class="py-2 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8">Nombre de empleado</th>
            <th scope="col" class="hidden py-2 pl-0 pr-8 font-semibold sm:table-cell">Puesto</th>
            <th scope="col" class="py-2 pl-0 pr-4 text-right font-semibold sm:pr-8 sm:text-left lg:pr-20">Status</th>
            <th scope="col" class="hidden py-2 pl-0 pr-8 font-semibold md:table-cell lg:pr-20">Entrada</th>
            <th scope="col" class="hidden py-2 pl-0 pr-4 text-right font-semibold sm:table-cell sm:pr-6 lg:pr-8">Salida</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-white/5">
          @foreach($asistencias as $asistencia)
          <tr>
            <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
              <div class="flex items-center gap-x-4">
                <div class="truncate text-sm font-medium leading-6 text-white">{{$asistencia->NombreCompleto}}</div>
              </div>
            </td>
            <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
              <div class="flex gap-x-3">
                <div class="font-mono text-sm leading-6 text-gray-400">{{$asistencia->NombrePuesto}}</div>
              </div>
            </td>
            <td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
              <div class="flex items-center justify-end gap-x-2 sm:justify-start">
                @if($asistencia->EstatusAsistencia==="Asistencia")
                <div class="flex-none rounded-full p-1 text-green-400 bg-green-400/10">
                  <div class="h-1.5 w-1.5 rounded-full bg-current"></div>
                </div>
                @else
                <div class="flex-none rounded-full p-1 text-rose-400 bg-rose-400/10">
                  <div class="h-1.5 w-1.5 rounded-full bg-current"></div>
                </div>
                @endif
                <div class="hidden text-white sm:block">{{$asistencia->EstatusAsistencia}}</div>
              </div>
            </td>
            <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
              <div class="flex gap-x-3">
                <div class="font-mono text-sm leading-6 text-gray-400">{{$asistencia->HoraEntrada}}</div>
              </div>
            </td>
            <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
              <div class="flex gap-x-3">
                <div class="font-mono text-sm leading-6 text-gray-400">{{$asistencia->HoraSalida}}</div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


  </div>
</body>
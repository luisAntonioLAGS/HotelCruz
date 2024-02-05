<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservaciones</title>
  @vite('resources/css/app.css')


  <!----Datatables-->
  <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/datatables.min.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/af-2.6.0/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/cr-1.7.0/datatables.min.js"></script>
  <script src="https://kit.fontawesome.com/e55449996a.js" crossorigin="anonymous"></script>
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
          @if(session('success'))
          <div class="alert alert-success" style="color: #fff; font-weight: bold;">
            {{ session('success') }}
          </div>
          @endif

          @if(session('error'))
          <div class="alert alert-danger" style="color: #fff; font-weight: bold;">
            {{ session('error') }}
          </div>
          @endif

          @if ($errors->any())
          <div class="alert alert-danger" style="color: #fff; font-weight: bold;">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <a href="{{ route("registrocliente") }}" type="button" class="block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Agregar huesped</a>
          </div>
        </div>
        <div class="mt-8 flow-root">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 text-white">
              <table class="min-w-full divide-y divide-gray-800 dataTablePage">
                <thead>
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">Nombre Completo</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Piso</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">No. Habitación</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Estatus</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Fecha Entrada</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Fecha Salida</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Hora Check Entrada</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Hora Check Salida</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Cantidad Días</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Total</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">Acciones</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-800">
                  @foreach($reservaciones as $reservacion)
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">{{ $reservacion->NombreCliente }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->PisoHabitacion }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->NoHabitacion }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->EstatusValidacion }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->FechaInicio }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->FechaFin }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->HoraCheckEntrada }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->HoraCheckSalida }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">{{ $reservacion->TotalDias }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">${{ $reservacion->TotalReservacion }}</td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                      <a href="{{ route(($reservacion->EstatusValidacion === 'PENDIENTE') ? 'checkin' : 'checkout', ['id' => $reservacion->Folio]) }}" class="text-indigo-400 hover:text-indigo-300">
                        @if($reservacion->EstatusValidacion === 'PENDIENTE')
                        Check IN
                        @elseif ($reservacion->EstatusValidacion === 'EN CURSO')
                        Check OUT
                        @endif
                      </a>
                    </td>
                  </tr>
                  @endforeach

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

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const loadDataTable = () => {
      const table = new DataTable('.dataTablePage', {
        language: {
          url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-MX.json',
        },
        colReorder: true,
        autoWidth: false,
        order: [
          [0, 'asc']
        ],
        pageLength: 25,
        dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
          "<'row'<'col-sm-12'tr>>" +
          "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [{
            //Botón para Excel
            extend: "excelHtml5",
            footer: true,
            title: "Registro de reservaciones",
            filename: "registro_de_reservaciones",
            autoFilter: true,
            sheetName: "Exported data",

            //Aquí es donde generas el botón personalizado
            text: '<span class="badge bg-success"><i class="fas fa-file-excel"></i></span>',
          },
          //Botón para PDF
          {
            extend: "pdfHtml5",
            download: "open",
            footer: true,
            orientation: "landscape",
            title: "Registro de reservaciones",
            filename: "registro_de_reservaciones",
            text: '<span class="badge bg-danger"><i class="fas fa-file-pdf"></i></span>',
            exportOptions: {
              columns: [0, ":visible"],
            },
          },
          //Botón para copiar
          {
            extend: "copyHtml5",
            footer: true,
            title: "Registro de reservaciones",
            filename: "registro_de_reservaciones",
            text: '<span class="badge bg-primary"><i class="fas fa-copy"></i></span>',
            exportOptions: {
              columns: [0, ":visible"],
            },
          },
          //Botón para print
          {
            extend: "print",
            footer: true,
            title: "Registro de reservaciones",
            filename: "registro_de_reservaciones",
            text: '<span class="badge bg-dark" id="imprimir"><i class="fas fa-print"></i></span>',
          },
          //Botón para cvs
          {
            extend: "csvHtml5",
            footer: true,
            charset: "utf-8",
            bom: true,
            title: "Registro de reservaciones",
            filename: "registro_de_reservaciones",
            text: '<span class="badge bg-success"><i class="fas fa-file-csv"></i></span>',
          },
          {
            extend: "colvis",
            text: '<span class="badge bg-info"><i class="fas fa-columns"></i></span>',
            postfixButtons: ["colvisRestore"],
          },
        ],
      });
    }

    loadDataTable();
  });
</script>

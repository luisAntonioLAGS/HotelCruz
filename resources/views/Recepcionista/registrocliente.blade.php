<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Registro de clientes</title>
  @vite('resources/css/app.css')
</head>
@livewire("vistarecepcion")
<div class="bg-gray-900 xl:pl-72">
  <form class="mx-auto max-w-2xl mt-10" method="POST" action="{{route('reservaciones')}}">
    @csrf
    <div class="space-y-26">
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-white">Nuevo Huesped</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Da de alta al cliente segun la información del correo recibido</p>
      </div>
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-white">Información personal</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Usa de manera correcta y confidencial los datos proporcionados</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="curp" class="block text-sm font-medium leading-6 text-white">CURP</label>
            <div class="mt-2">
              <input type="text" name="curp" id="curp" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" maxlength="18" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="nombre" class="block text-sm font-medium leading-6 text-white">Nombre</label>
            <div class="mt-2">
              <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="apellidoMaterno" class="block text-sm font-medium leading-6 text-white">Apellido Materno</label>
            <div class="mt-2">
              <input type="text" name="apellidoMaterno" id="apellidoMaterno" autocomplete="family-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="apellidoPaterno" class="block text-sm font-medium leading-6 text-white">Apellido Paterno</label>
            <div class="mt-2">
              <input type="text" name="apellidoPaterno" id="apellidoPaterno" autocomplete="family-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="telefono" class="block text-sm font-medium leading-6 text-white">Teléfono</label>
            <div class="mt-2">
              <input id="telefono" name="telefono" type="tel" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="correo" class="block text-sm font-medium leading-6 text-white">Correo</label>
            <div class="mt-2">
              <input id="correo" name="correo" type="email" autocomplete="email" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="fechaNacimiento" class="block text-sm font-medium leading-6 text-white">Fecha Nacimiento</label>
            <div class="mt-2">
              <input id="fechaNacimiento" name="fechaNacimiento" type="date" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="direccion" class="block text-sm font-medium leading-6 text-white">Dirección</label>
            <div class="mt-2">
              <input type="text" name="direccion" id="direccion" autocomplete="direccion" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-2 sm:col-start-1">
            <label for="ciudad" class="block text-sm font-medium leading-6 text-white">Ciudad</label>
            <div class="mt-2">
              <input type="text" name="ciudad" id="ciudad" autocomplete="ciudad" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="estado" class="block text-sm font-medium leading-6 text-white">Estado</label>
            <div class="mt-2">
              <input type="text" name="estado" id="estado" autocomplete="estado" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="codigoPostal" class="block text-sm font-medium leading-6 text-white">Codigo Postal</label>
            <div class="mt-2">
              <input type="text" name="codigoPostal" id="codigoPostal" autocomplete="codigoPostal" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>
        </div>
      </div>

      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 mt-4 text-white">Información Habitación</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Agrega correctamente la información de la habitación</p>
        <div class="mt-10 space-y-10">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <!-- <div class="sm:col-span-3 mt-2">
              <label for="estatus" class="block text-sm font-medium leading-6 text-white">Piso Habitación</label>
              <select id="estatus" name="location" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                <option class="text-black" selected>Sin ocupar</option>
                <option class="text-black">Ocupado</option>
                <option class="text-black">Finalizado</option>
              </select>
            </div> -->
            <div class="sm:col-span-3">
              <label for="habitacion" class="block text-sm font-medium leading-6 text-white">Número de Habitación</label>
              <div class="mt-2">
                <select name="habitacion" id="habitacion" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                  <option value="" selected hidden class="text-black">Seleccione una habitación</option>
                  @foreach($habitaciones as $habitacion)
                  <option value="{{$habitacion->ID}}" class="text-black">{{$habitacion->NoHabitacion}} => ${{$habitacion->PrecioNoche}} por noche</option>
                  @endforeach
                </select>
                <!-- <input type="text" name="habitacion" id="first-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"> -->
              </div>
            </div>
            <div class="sm:col-span-3">
              <label for="fechaEntrada" class="block text-sm font-medium leading-6 text-white">Fecha de Entrada</label>
              <div class="mt-2">
                <input type="date" name="fechaEntrada" id="fechaEntrada" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
              </div>
            </div>
            <div class="sm:col-span-3">
              <label for="fechaSalida" class="block text-sm font-medium leading-6 text-white">Fecha de Salida</label>
              <div class="mt-2">
                <input type="date" name="fechaSalida" id="fechaSalida" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
              </div>
            </div>
            <div class="sm:col-span-3">
              <label for="cantidadPersonas" class="block text-sm font-medium leading-6 text-white">Cantidad Personas</label>
              <div class="mt-2">
                <input type="number" name="cantidadPersonas" id="cantidadPersonas" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="{{ route("clientes") }}" type="button" class="text-sm font-semibold leading-6 text-white">Cancelar</a>
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Guardar</button>
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
  </form>

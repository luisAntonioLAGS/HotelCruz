<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Registro de servicio alberca</title>
  @vite('resources/css/app.css')
</head>
@livewire("vistarecepcion")
<div class="bg-gray-900 xl:pl-72">
  <form class="mx-auto max-w-2xl mt-10" method="POST" action="{{route('registroalbercapost')}}">
    @csrf
    <div class="space-y-26">
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-white">Nuevo Registro</h2>
      </div>
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-white">Información personal</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Usa de manera correcta y confidencial los datos proporcionados</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="nombre" class="block text-sm font-medium leading-6 text-white">Nombre Completo</label>
            <div class="mt-2">
              <input type="text" name="nombre" id="nombre" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="fecha" class="block text-sm font-medium leading-6 text-white">Fecha</label>
            <div class="mt-2">
              <input id="fecha" name="fecha" type="date" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>
          @foreach($servicio as $servicio)

          <div class="sm:col-span-3">
            <label for="servicio" class="block text-sm font-medium leading-6 text-white">Servicio</label>
            <div class="mt-2">
              <input type="text" name="servicio" id="servicio" autocomplete="servicio" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" value="({{$servicio->ClaveServicio}}) {{$servicio->Servicio}}" required readonly>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="precio" class="block text-sm font-medium leading-6 text-white">Precio</label>
            <div class="mt-2">
              <input type="number" step="0.01" name="precio" id="precio" autocomplete="precio" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" value="{{$servicio->PrecioDia}}" required readonly>
            </div>
          </div>

          @endforeach

          <div class="sm:col-span-3">
            <label for="pago" class="block text-sm font-medium leading-6 text-white">Pago</label>
            <div class="mt-2">
              <input type="number" step="0.01" name="pago" id="pago" autocomplete="pago" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="cambio" class="block text-sm font-medium leading-6 text-white">Cambio</label>
            <div class="mt-2">
              <input type="number" step="0.01" name="cambio" id="cambio" autocomplete="cambio" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
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
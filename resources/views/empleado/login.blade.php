<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite('resources/css/app.css')
  <link rel="icon" type="image/jpg" href="https://www.hotelsantacruzjuchitan.com/img/layout/main_logo.png" />
</head>
@livewire("Navegacion")
<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <img class="mx-auto h-16 w-auto" src="{{ asset("img/logo.jpg") }}" alt="Hotel santa cruz en juchitan">
    <h2 class="mt-4 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Bienvenido</h2>
  </div>
  <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-[480px]">
    <div class="bg-[#0A1E4C] px-6 py-12 shadow sm:rounded-lg sm:px-12">
      <form class="space-y-6" action="{{route('login')}}" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-md font-medium leading-6 text-white">Correo:</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="password" class="block text-md font-medium leading-6 text-white">Contraseña:</label>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
            <label for="remember-me" class="ml-3 block text-sm leading-6 text-white">Recuerdame</label>
          </div>

          <div class="text-sm leading-6">
           
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#1D9BF0] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ingresar</button>
        </div>
      </form>
      @if(Session::has('error'))
      <div class="alert alert-danger" style="color: #fff; font-weight: bold;">
        {{ Session::get('error') }}
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
      <div>
        <div class="relative mt-10">
          <div class="absolute inset-0 flex items-center" aria-hidden="true">
            <div class="w-full border-t border-gray-200"></div>
          </div>
          <div class="relative flex justify-center text-sm font-medium leading-6">
            <a href="{{ route("registro")}}" class="bg-white px-6 text-gray-900"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
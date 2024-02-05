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
    <!-- Sticky search header -->
    <main>
      <!-- Settings forms -->
      <div class="divide-y divide-white/5">
        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
          <div>
            <h2 class="text-base font-semibold leading-7 text-white">Información personal</h2>
            <p class="mt-1 text-sm leading-6 text-gray-400">Agrega a un empleado</p>
          </div>

          <form class="md:col-span-2" action="{{route('altaempleado')}}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">

              <div class="sm:col-span-3">
                <label for="claveEmpleado" class="block text-sm font-medium leading-6 text-white">Clave Empleado</label>
                <div class="mt-2">
                  <input type="text" name="claveEmpleado" id="claveEmpleado" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="curp" class="block text-sm font-medium leading-6 text-white">CURP</label>
                <div class="mt-2">
                  <input type="text" name="curp" id="curp" autocomplete="curp" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-white">Nombre</label>
                <div class="mt-2">
                  <input type="text" name="nombre" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="apellidoPaterno" class="block text-sm font-medium leading-6 text-white">Apellido Paterno</label>
                <div class="mt-2">
                  <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-white">Apellido Materno</label>
                <div class="mt-2">
                  <input type="text" name="apellidoMaterno" id="last-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="telefono" class="block text-sm font-medium leading-6 text-white">Télefono</label>
                <div class="mt-2">
                  <input id="telefono" name="telefono" type="tel" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="col-span-full">
                <label for="email" class="block text-sm font-medium leading-6 text-white">Correo address</label>
                <div class="mt-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="col-span-full">
                <label for="nss" class="block text-sm font-medium leading-6 text-white">NSS</label>
                <div class="mt-2">
                  <input id="nss" name="nss" type="text" autocomplete="nss" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                </div>
              </div>

              <div class="col-span-full">
                <label for="username" class="block text-sm font-medium leading-6 text-white">Puesto</label>
                <div class="mt-2">
                  <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <select name="puesto" id="puesto" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&_*]:text-black" required>
                      <option value="" selected hidden>Seleccione una opción</option>
                      @foreach($puestos as $puesto)
                      <option value="{{$puesto->ID}}">{{$puesto->Nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <!-- <div class="col-span-full">
                <label for="username" class="block text-sm font-medium leading-6 text-white">Usuario</label>
                <div class="mt-2">
                  <div class="flex rounded-md bg-white/5 ring-1 ring-inset ring-white/10 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                    <span class="flex select-none items-center pl-3 text-gray-400 sm:text-sm">Ejemplo/</span>
                    <input type="text" name="username" id="username" autocomplete="username" class="flex-1 border-0 bg-transparent py-1.5 pl-1 text-white focus:ring-0 sm:text-sm sm:leading-6" placeholder="JuanLopez">
                  </div>
                </div>
              </div> -->
            </div>
            <div class="mt-8 flex">
              <button type="button" onclick="history.back()" class="rounded-md bg-red-600 px-3  mr-8 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Cancelar</button>
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
        </div>
      </div>
    </main>
  </div>
</body>

</html>
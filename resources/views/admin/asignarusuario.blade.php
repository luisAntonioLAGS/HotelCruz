<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Asigar Usuario</title>
    @vite('resources/css/app.css')
</head>
@livewire("menuadministrador")

<body>
    <div class="xl:pl-72">
        <!-- Sticky search header -->
        <main>
            <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-white">Usuario</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-400">Asigna una contraseña segura al usuario y un rol</p>
                </div>

                <form class="md:col-span-2" method="POST" action="{{route('registrarusuario')}}">
                    @csrf
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="claveempleado" class="block text-sm font-medium leading-6 text-white">Clave Empleado</label>
                            <div class="mt-2">
                                <input id="claveempleado" name="claveempleado" type="text" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required readonly value="{{ $claveempleado }}">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="correo" class="block text-sm font-medium leading-6 text-white">Correo</label>
                            <div class="mt-2">
                                <input id="correo" name="correo" type="email" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="country" class="block text-sm font-medium leading-6 text-white">Rol</label>
                            <div class="mt-2">
                                <select id="rol" name="rol" autocomplete="rol-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&_*]:text-black">
                                    <option value="" hidden selected>Seleccione una opción</option>
                                    <option value="admin">Admin</option>
                                    <option value="recepcionista">Recepcionista</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="password" class="block text-sm font-medium leading-6 text-white">Contraseña</label>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="password" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="confirmPassword" class="block text-sm font-medium leading-6 text-white">Confirmar contraseña</label>
                            <div class="mt-2">
                                <input id="confirmPassword" name="confirmPassword" type="password" autocomplete="new-password" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex">
                        <button type="submit" class="rounded-md bg-red-600 px-3  mr-8 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Cancelar</button>
                        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Guardar</button>
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
                    </div>
                </form>
            </div>
        </main>
    </div>

</body>

</html>
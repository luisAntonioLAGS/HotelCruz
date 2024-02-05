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
            <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
                <form class="flex items-start md:col-span-2" method="POST" action="{{route('checkoutpost')}}">
                    <div>
                        <h2 class="text-base font-semibold leading-7 text-white">Registrar Check-OUT del cliente</h2>
                        <input id="folio" name="id" type="number" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required readonly value="{{ $id }}">
                    </div>
                    @csrf
                    <div class="sm:col-span-3">
                        <label for="horaSalida" class="block text-sm font-medium leading-6 text-white">Hora Salida</label>
                        <div class="mt-2">
                            <input id="horaSalida" name="horaSalida" type="time" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6" required>
                        </div>
                    </div>

                    <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400">Guardar</button>

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
        </main>
    </div>
</body>

</html>
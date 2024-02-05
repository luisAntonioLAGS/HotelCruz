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
                <div>
                    <h2 class="text-base font-semibold leading-7 text-white">Borrar Usuario</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-400">Esta acción no es reversible. Toda la información relacionada con esta cuenta se eliminará permanentemente.</p>
                </div>

                <form class="flex items-start md:col-span-2">
                    <button type="submit" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400">Si, deseo eliminar la cuenta</button>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
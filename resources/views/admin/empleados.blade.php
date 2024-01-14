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
    <div class="text-center py-12">
        <a href="{{ route("alta") }}" type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Dar de alta a un empleado</a>
    </div>
        <div>
            <div class="mx-auto max-w-xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">
                <div class="relative">
                    <svg class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                    <input type="text" class="h-10 w-full border-0 bg-transparent pl-11 pr-4 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm" placeholder="Busca al empleado para editar" role="combobox" aria-expanded="false" aria-controls="options" oninput="filterNames(this.value)">
                </div>

                <ul class="max-h-72 scroll-py-2 overflow-y-auto py-2 text-sm text-gray-800 hidden" id="options" role="listbox">
                    <li class="cursor-pointer select-none px-4 py-2 name-option" data-name="Juan perez" role="option" tabindex="-1" onmouseover="highlightName(this)" onmouseout="unhighlightName(this)" onclick="selectName(this)"><a href="">Juan perez</a></li>
                    <li class="cursor-pointer select-none px-4 py-2 name-option" data-name="pedro mota" role="option" tabindex="-1" onmouseover="highlightName(this)" onmouseout="unhighlightName(this)" onclick="selectName(this)">pedro mota</li>
                    <li class="cursor-pointer select-none px-4 py-2 name-option" data-name="Colosio" role="option" tabindex="-1" onmouseover="highlightName(this)" onmouseout="unhighlightName(this)" onclick="selectName(this)">Colosio</li>
                    <li class="cursor-pointer select-none px-4 py-2 name-option" data-name="rocky" role="option" tabindex="-1" onmouseover="highlightName(this)" onmouseout="unhighlightName(this)" onclick="selectName(this)">rocky</li>
                </ul>

                <p id="empty-state" class="p-4 text-sm text-gray-500">No existe el empleado</p>
            </div>
        </div>
    </div>

    <script>
      function filterNames(searchTerm) {
        const names = document.querySelectorAll('.name-option');
        const emptyState = document.getElementById('empty-state');
        const optionsList = document.getElementById('options');

        let found = false;

        names.forEach((name) => {
          const nameText = name.dataset.name.toLowerCase();
          const isVisible = nameText.includes(searchTerm.toLowerCase());

          if (isVisible) {
            name.classList.remove('hidden');
            found = true;
          } else {
            name.classList.add('hidden');
          }
        });

        emptyState.style.display = found ? 'none' : 'block';
        optionsList.style.display = found ? 'block' : 'none';
      }

      function selectName(selectedName) {
        const names = document.querySelectorAll('.name-option');

        names.forEach((name) => {
          name.classList.remove('bg-indigo-600', 'text-white');
        });

        selectedName.classList.add('bg-indigo-600', 'text-white');
        closeSearch();
      }

      function highlightName(nameElement) {
        nameElement.classList.add('bg-indigo-600', 'text-white');
      }

      function unhighlightName(nameElement) {
        nameElement.classList.remove('bg-indigo-600', 'text-white');
      }

      function closeSearch() {
        const searchContainer = document.getElementById('searchContainer');
        const inputElement = document.querySelector('.h-12');
        const optionsList = document.getElementById('options');

        inputElement.value = '';
        filterNames('');
        optionsList.style.display = 'none';
        searchContainer.style.display = 'none';
      }
    </script>

</div>
    </body>
</html>

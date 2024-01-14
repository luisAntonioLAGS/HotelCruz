<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro de clientes</title>
        @vite('resources/css/app.css')
    </head>
    @livewire("vistarecepcion")
<div class="bg-gray-900 xl:pl-72">
<form class="mx-auto max-w-2xl mt-10">
    <div class="space-y-26">
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-white">Nuevo Huesped</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Da de alta al cliente segun la información del correo recibido</p>
      </div>
      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-white">información personal</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Usa de manera correcta y confidencial los datos proporcionados</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-white">Nombre</label>
            <div class="mt-2">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium leading-6 text-white">Apellidos</label>
            <div class="mt-2">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-white">Correo</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-full">
            <label for="street-address" class="block text-sm font-medium leading-6 text-white">Dirección</label>
            <div class="mt-2">
              <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-2 sm:col-start-1">
            <label for="city" class="block text-sm font-medium leading-6 text-white">Ciudad</label>
            <div class="mt-2">
              <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="region" class="block text-sm font-medium leading-6 text-white">Estado</label>
            <div class="mt-2">
              <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="postal-code" class="block text-sm font-medium leading-6 text-white">Codigo Postal</label>
            <div class="mt-2">
              <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>
      </div>

      <div class="border-b border-white/10 pb-12">
        <h2 class="text-base font-semibold leading-7 mt-4 text-white">Información Habitación</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Agrega correctamente la información de la habitación</p>
        <div class="mt-10 space-y-10">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="habitacion" class="block text-sm font-medium leading-6 text-white">Número de Habitación</label>
                  <div class="mt-2">
                    <input type="text" name="habitacion" id="first-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3 mt-2">
                    <label for="estatus" class="block text-sm font-medium leading-6 text-white">Estatus</label>
                    <select id="estatus" name="location" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                      <option class="text-black" selected>Sin ocupar</option>
                      <option class="text-black">Ocupado</option>
                      <option class="text-black">Finalizado</option>
                    </select>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="habitacion" class="block text-sm font-medium leading-6 text-white">Fecha de Entrada</label>
                        <div class="mt-2">
                          <input type="date" name="entrada" id="first-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                      </div>
                      <div class="sm:col-span-3">
                        <label for="habitacion" class="block text-sm font-medium leading-6 text-white">Fecha de Salida</label>
                        <div class="mt-2">
                          <input type="date" name="Salida" id="first-name" class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                        </div>
                  </div>
        </div>

      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="{{ route("clientes") }}" type="button" class="text-sm font-semibold leading-6 text-white">Cancelar</a>
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Guardar</button>
    </div>
  </form>

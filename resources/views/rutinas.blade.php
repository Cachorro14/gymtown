@extends('layouts.windmill')
@section('contenido')
    
    <!-- Rutinas -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
<a href="/rutinas">  Rutinas    </a>
</h3>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">Nombre</th>
          <th class="px-4 py-3">Tiempo</th>
          <th class="px-4 py-3">Descripcion</th>
          <th class="px-4 py-3">Ejercicios</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Superior.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[0]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
          {{$rutinas[0]->duracion}}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
            {{$rutinas[0]->descripcion}}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
            {{$rutinas[0]->ejercicios}}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/inferior.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[1]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{$rutinas[1]->duracion}}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
              {{$rutinas[1]->descripcion}}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
              {{$rutinas[1]->ejercicios}}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/pecho.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[2]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[2]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
            {{ $rutinas[2]->descripcion }}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
            {{ $rutinas[2]->ejercicios }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/abs.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[3]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[3]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[3]->descripcion }}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[3]->ejercicios }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/brazo.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[4]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[4]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
              {{ $rutinas[4]->descripcion }}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
              {{ $rutinas[4]->ejercicios }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/crossfit1.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[5]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[5]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[5]->descripcion }}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[5]->ejercicios }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/crossfit2.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[6]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[6]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[6]->descripcion }}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[6]->ejercicios }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/novatos1.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[7]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[7]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[7]->descripcion }}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[7]->ejercicios }}
            </span>
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/novatos2.jpg') }}" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">{{ $rutinas[8]->nombre }}</p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            {{ $rutinas[8]->duracion }}
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[8]->descripcion }}
            </span>
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              {{ $rutinas[8]->ejercicios }}
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



@endsection

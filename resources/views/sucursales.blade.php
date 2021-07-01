@extends('layouts.windmill')
@section('contenido')
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  <a href="/sucursales">Sucursales</a>
</h3>
<div class="grid gap-6 mb-9 md:grid-cols-1 xl:grid-cols-1">
  <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Sucursal {{ $sucursales[0]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        <a href="https://goo.gl/maps/o51NZLRHopb9iR6j6" target="_blank"> {{ $sucursales[0]->domicilio }}</a>
      </p>
    </div>
  </div>
  <img class="" src="{{ asset('img/gym1.jpg') }}" alt="" width="500" height="100">

  
  <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
       Sucursal {{ $sucursales[1]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
      <a href="https://goo.gl/maps/ajPzKyzNE2hvnFcg8" target="_blank"> {{ $sucursales[1]->domicilio }}</a>
      </p>
    </div>
  </div>
  <img class="" src="{{ asset('img/gym2.jpg') }}" alt="" width="500" height="100">
   <!-- Card --> 
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
      Sucursal {{ $sucursales[2]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        <a href="https://goo.gl/maps/VPPmvDuqGajw8GJA6" taget="_blank">{{ $sucursales[2]->domicilio }}</a>
      </p>
    </div>
  </div>
  <img class="" src="{{ asset('img/gym3.jpg') }}" alt="" width="500" height="100">
   <!-- Card --> 
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
      Sucursal {{ $sucursales[3]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        <a href="https://goo.gl/maps/Grt9oTuimdMAfjCK7" target="_blank">{{ $sucursales[3]->domicilio }}</a>
      </p>
    </div>
  </div>
  <img class="" src="{{ asset('img/gym4.jpg') }}" alt="" width="500" height="100">
   <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
    </div>
    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
      <img class="object-cover w-full h-full rounded-full" src="{{ asset('img/Maps.jpg') }}" alt="" loading="lazy">
      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
      Sucursal {{ $sucursales[4]->nombre }}
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
      <a href="https://goo.gl/maps/mFVT1TNUteyXhyBX8" target="_blank">{{ $sucursales[4]->domicilio }}</a>

      </p>
    </div>
  </div>
  <img class="" src="{{ asset('img/gym5.jpg') }}" alt="" width="500" height="100">
</div>
@endsection

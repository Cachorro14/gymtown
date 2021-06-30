@extends('layouts.windmill')
@section('contenido')

<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Inicio
</h2>


<!-- Sucursales  -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Sucursales
</h3>

<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
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
        
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        
      </p>
    </div>
  </div>
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
        
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        
      </p>
    </div>
  </div>
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
        
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        
      </p>
    </div>
  </div>
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
        
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        
      </p>
    </div>
  </div>
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
        
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        
      </p>
    </div>
  </div>
</div>
<!-- Rutinas -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Rutinas 
</h3>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
  <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">Client</th>
          <th class="px-4 py-3">Amount</th>
          <th class="px-4 py-3">Status</th>
          <th class="px-4 py-3">Date</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Hans Burger</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  10x Developer
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 863.45
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              Approved
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;facepad=3&amp;fit=facearea&amp;s=707b9c33066bf8808c934c8ab394dff6" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Jolina Angelie</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  Unemployed
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 369.95
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
              Pending
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Sarah Curry</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  Designer
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 86.00
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
              Denied
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Rulia Joberts</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  Actress
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 1276.45
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              Approved
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Wenzel Dashington</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  Actor
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 863.45
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
              Expired
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;s=b8377ca9f985d80264279f277f3a67f5" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Dave Li</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  Influencer
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 863.45
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              Approved
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Maria Ramovic</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  Runner
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 863.45
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              Approved
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Hitney Wouston</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  Singer
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 863.45
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              Approved
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
        <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
            <div class="flex items-center text-sm">
              <!-- Avatar with inset shadow -->
              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy">
                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
              </div>
              <div>
                <p class="font-semibold">Hans Burger</p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                  10x Developer
                </p>
              </div>
            </div>
          </td>
          <td class="px-4 py-3 text-sm">
            $ 863.45
          </td>
          <td class="px-4 py-3 text-xs">
            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
              Approved
            </span>
          </td>
          <td class="px-4 py-3 text-sm">
            6/10/2020
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- Paquetes -->
<h3 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Paquetes
</h3>
<div class="grid gap-6 mb-8 md:grid-cols-2">
  <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
    <h4 class="mb-4 font-semibold">
      Colored card
    </h4>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Fuga, cum commodi a omnis numquam quod? Totam exercitationem
      quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
      nihil dolorum.
    </p>
  </div>
  <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
    <h4 class="mb-4 font-semibold">
      Colored card
    </h4>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Fuga, cum commodi a omnis numquam quod? Totam exercitationem
      quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
      nihil dolorum.
    </p>
  </div>
  <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
    <h4 class="mb-4 font-semibold">
      Colored card
    </h4>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Fuga, cum commodi a omnis numquam quod? Totam exercitationem
      quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
      nihil dolorum.
    </p>
  </div>
  <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
    <h4 class="mb-4 font-semibold">
      Colored card
    </h4>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Fuga, cum commodi a omnis numquam quod? Totam exercitationem
      quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
      nihil dolorum.
    </p>
  </div>
  <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
    <h4 class="mb-4 font-semibold">
      Colored card
    </h4>
    <p>
      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Fuga, cum commodi a omnis numquam quod? Totam exercitationem
      quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
      nihil dolorum.
    </p>
  </div>
</div>

@endsection
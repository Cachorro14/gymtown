@extends('layouts.windmill')
@section('contenido')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Listado de Instructores
</h2>

    <!-- With actions -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300" >
            <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                href="{{ route('instructor.create') }}">
                Añadir instructor
            </a>
            </h4>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Nombre</th>    
                      <th class="px-4 py-3">Telefono</th>
                      <th class="px-4 py-3">Horario</th>
                      <th class="px-4 py-3">Sueldo</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach($instructores as $instructor)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            <a href="{{ route('instructor.show',$instructor->id) }}">{{ $instructor->nombre }}</a>
                          </span>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $instructor->telefono }}
                      </td>
                      <td class="px-4 py-3 text-xs">
                      {{ $instructor->horario }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $instructor->sueldo }}
                      </td>
                     
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>

@endsection
@extends('layouts.windmill')
@section('contenido')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Detalles del Instructor
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
                      <th class="px-4 py-3">Modificar</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
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
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <a
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                            href="{{ route('instructor.edit', $instructor) }}"

                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

<form action="{{ route('instructor.destroy', $instructor) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class ="mt-4">
        <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        <span>Eliminar Instructor</span>
        </button>
    </div>
</form>
<div class="flex items-center space-x-8 text-sm">
    <a
        class="flex items-center justify-between px-4 py-4 text-sm font-large leading-8 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
        aria-label="Edit"
        href="{{ route('instructor.index') }}"
    >
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z"></path></svg>
    <span>Regresar</span>
    </svg>
    </a>
</div>


@endsection
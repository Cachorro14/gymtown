@extends('layouts.windmill')
@section('contenido')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
  Listado de Asistencias
</h2>

    <!-- With actions -->
            <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300" >
            <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                href="{{ route('asistencia.form') }}">
                Añadir Entrada
            </a>
            </h4>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Instructor </th>    
                      <th class="px-4 py-3">Usuario</th>
                      <th class="px-4 py-3">Fecha</th>
                      <th class="px-4 py-3">Hora de entrada</th>
                      <th class="px-4 py-3">Hora de salida</th>
                      <th class="px-4 py-3">Sucursal</th>
                      <th class="px-4 py-3">Rutina</th>
                      <th class="px-4 py-3">Acciones</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach($asistencias as $asistencia)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        {{ $asistencia->instructor_id }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $asistencia->user_id }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $asistencia->fecha }}
                      </td>
                      <td class="px-4 py-3 text-xs">
                      {{ $asistencia->entrada }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $asistencia->salida }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $asistencia->sucursal_id }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ $asistencia->rutina_id }}
                      </td>
                      @if($asistencia->salida == NULL)
                        <td class="px-4 py-3 text-sm">
                          <div class ="mt-4">
                              <a class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                              href="{{route('asistencia.salida',$asistencia)}}"
                              >
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                  <span>Registrar Salida</span>
                              </a>
                          </div>
                        </td>
                      @endif
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>

@endsection
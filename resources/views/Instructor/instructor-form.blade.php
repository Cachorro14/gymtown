@extends('layouts.windmill')
@section('contenido')
    

    <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
            Formulario de instructores
            </h4>
            
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @if(isset($instructor))
                <form action=" {{ route('instructor.update', $instructor) }}" method="POST">
                    @method('PATCH')
                @else
                    <form action=" {{route('instructor.store') }}" method="POST">

                @endif
                @csrf()

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Nombre</span>
                        <input
                            class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:shadow-outline-purple @error('nombre') border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:shadow-outline-red @enderror focus:outline-none dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            type="text"
                            name="nombre"
                            id="nombre"
                            value="{{ old('nombre') ?? $instructor->nombre ?? '' }}"
                            placeholder="Nombre"
                            />
                            @error('nombre')
                                <span class="text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </span>
                            @enderror
                    </label>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Teléfono</span>
                            <input
                            class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:shadow-outline-purple @error('telefono') border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:shadow-outline-red @enderror focus:outline-none dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            type="text"
                            name="telefono"
                            id="telefono"
                            value="{{ old('telefono') ?? $instructor->telefono ?? '' }}"
                            placeholder="Teléfono"
                            />
                            @error('telefono')
                                <span class="text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </span>
                            @enderror
                    </label>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Horario</span>
                            <input
                            class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:shadow-outline-purple @error('horario') border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:shadow-outline-red @enderror focus:outline-none dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            type="text"
                            name="horario"
                            id="horario"
                            value="{{ old('horario') ?? $instructor->horario ?? '' }}"
                            placeholder="Horario"
                            />
                            @error('horario')
                                <span class="text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </span>
                            @enderror
                    </label>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Sueldo</span>
                            <input
                            class="block mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:shadow-outline-purple @error('sueldo') border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:shadow-outline-red @enderror focus:outline-none dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            type="number"
                            name="sueldo"
                            id="sueldo"
                            value="{{ old('sueldo') ?? $instructor->sueldo ?? '' }}"
                            placeholder="Sueldo $"
                            />
                            @error('sueldo')
                                <span class="text-xs text-red-600 dark:text-red-400">
                                    {{ $message }}
                                </span>
                            @enderror
                    </label>
                    <div class ="mt-4">
                        <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                            <span>Guardar</span>
                        </button>
                    </div>
                </form>
            </form>    

@endsection
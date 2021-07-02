@extends('layouts.windmill')
@section('contenido')
    

<h4
  class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
>
    Agregar paquete a Usuario
</h4>
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <form action="{{ route('paquete') }}" method="POST">
        @csrf()
        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Usuarios
                </span>
                <select 
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="user_id"
                >
                    <option>---</option>
                    @foreach($users as $user)
                        @if($user->tipo=="Usuario" and $user->paquete_id==NULL )
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endif
                    @endforeach
                </select>
              </label>
            </div>
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Paquetes 
                </span>
                <select 
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="paquete_id"
                >
                    <option>---</option>
                    @foreach($paquetes as $paquete)
                        <option value="{{$paquete->id}}">{{$paquete->nombre}} ${{$paquete->precio}}</option>
                    @endforeach
                </select>
              </label>
            </div>
            <div>
                <div class ="mt-4">
                    <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        <span>Guardar</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
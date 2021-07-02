@extends('layouts.windmill')
@section('contenido')
    
<form action="{{route('asistencia.store') }}" method="POST">
    <div>
        <div class ="mt-4">
            <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            aria-Label="Registrar Salida"
            >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                <span>Registrar Salida</span>
            </button>
        </div>
    </div>
</form>

@endsection
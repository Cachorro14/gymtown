@extends('layouts.temp')
@section('contenido')
    <h1>Formulario de instructores</h1>
    
    <p>
        <a href="{{ route('instructor.index') }}">Listado de instructores</a>
    </p>

    @if(isset($instructor))
        <form action=" {{ route('instructor.update', $instructor) }}" method="POST">
            @method('PATCH')
    @else
        <form action=" {{ route('instructor.store') }}" method="POST">

    @endif
        @csrf()
        <label for="nombre">Nombre</label> 
        <input type="text" name="nombre" id="nombre" value="{{ $instructor->nombre ?? '' }}">
        <br>
        <label for="telefono">Telefono</label> 
        <input type="text" name="telefono" id="telefono" value="{{ $instructor->telefono ?? '' }}">
        <br>
        <label for="horario">Horario</label> 
        <input type="text" name="horario" id="horario" value="{{ $instructor->horario ?? '' }}">
        <br>
        <label for="sueldo">Sueldo</label> 
        <input type="number" name="sueldo" id="sueldo" value="{{ $instructor->sueldo ?? '' }}">
        <br>
        <input type="submit" value="Guardar">   

        </form>
@endsection
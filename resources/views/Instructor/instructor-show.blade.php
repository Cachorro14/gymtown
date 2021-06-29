@extends('layouts.temp')
@section('contenido')
    <h1>Detalles del Instructor</h1>

    <p>
        <a href="{{ route('instructor.index') }}">Listado de instructores</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>    
                <th>Telefono</th>
                <th>Horario</th>
                <th>Sueldo</th>
                <th>Modificar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $instructor->id }}</td>
                <td>{{ $instructor->nombre }}</td>    
                <td>{{ $instructor->telefono }}</td>
                <td>{{ $instructor->horario }}</td>
                <td>{{ $instructor->sueldo }}</td>
                <td>
                    <a href="{{ route('instructor.edit', $instructor) }}">Editar</a>
                </td>

            </tr>
        </tbody>
    </table>

    <form action="{{ route('instructor.destroy', $instructor) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Borrar Instructor">
    </form>

@endsection
@extends('layouts.temp')
@section('contenido')
    <h1>Listado de instructores</h1>


    <p>
        <a href="{{ route('instructor.create') }}">Añadir instructor</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>    
                <th>Telefono</th>
                <th>Horario</th>
                <th>Sueldo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructores as $instructor)
                <tr>
                    <td>{{ $instructor->id }}</td>
                    <td>
                        <a href="{{ route('instructor.show',$instructor->id) }}">{{ $instructor->nombre }}</a>
                    
                    </td>    
                    <td>{{ $instructor->telefono }}</td>
                    <td>{{ $instructor->horario }}</td>
                    <td>{{ $instructor->sueldo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
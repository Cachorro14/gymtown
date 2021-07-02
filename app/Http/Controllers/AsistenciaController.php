<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Instructor;
use App\Models\Paquete;
use App\Models\Rutina;
use App\Models\Sucursal;
use App\Models\User;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencias = Asistencia::all();
        $instructores = Instructor::all();
        $paquetes = Paquete::all();
        $sucursales = Sucursal::all();
        return view('asistencia.asistencia-index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asistencias = Asistencia::all();
        $instructores = Instructor::all();
        $paquetes = Paquete::all();
        $sucursales = Sucursal::all();
        $rutinas = Rutina::all();
        $users = User::all();

        return view(
            'asistencia.asistencia-form',
            compact(
                'asistencias',
                'instructores',
                'paquetes',
                'sucursales',
                'rutinas',
                'users'
            )
        );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'fecha' => today(),
            'entrada' => now(),
        ]);
        Asistencia::create($request->all());

        return redirect()->route('asistencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(Asistencia $asistencia)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistencia $asistencia)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Asistencia $asistencia)
    {
        $asistencia->salida = now();
        $asistencia->save();

        return redirect()->route('asistencia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }

    /**
     *
     *
     *
     *
     */

    public function salida(Asistencia $asistencia)
    {
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Vista;
use App\Models\Asistencia;
use App\Models\Instructor;
use App\Models\Paquete;
use App\Models\Rutina;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio()
    {
        $asistencias = Asistencia::all();
        $instructores = Instructor::all();
        $paquetes = Paquete::all();
        $sucursales = Sucursal::all();
        $rutinas = Rutina::all();
        return view(
            'inicio',
            compact(
                'asistencias',
                'rutinas',
                'paquetes',
                'sucursales',
                'instructores'
            )
        );
    }
    public function sucursalShow()
    {
        $sucursales = Sucursal::all();
        return view('sucursales', compact('sucursales'));
    }
    public function rutinaShow()
    {
        $rutinas = Rutina::all();
        return view('rutinas', compact('rutinas'));
    }

    /**
     * * Show the form for creating a new resource.
     * *
     * * @return \Illuminate\Http\Response
     *
     *public function create()
     *{
     *    //
     *}
     *
     *
     * * Store a newly created resource in storage.
     * *
     * * @param  \Illuminate\Http\Request  $request
     * * @return \Illuminate\Http\Response
     *
     *public function store(Request $request)
     *{
     *    //
     *}
     *
     *
     * * Display the specified resource.
     * *
     * * @param  \App\Models\vista  $vista
     * * @return \Illuminate\Http\Response
     *
     *public function show(vista $vista)
     *{
     *    //
     *}
     *
     *
     * * Show the form for editing the specified resource.
     * *
     * * @param  \App\Models\vista  $vista
     * * @return \Illuminate\Http\Response
     *
     *public function edit(vista $vista)
     *{
     *    //
     *}
     *
     *
     * * Update the specified resource in storage.
     * *
     * * @param  \Illuminate\Http\Request  $request
     * * @param  \App\Models\vista  $vista
     * * @return \Illuminate\Http\Response
     *
     *public function update(Request $request, vista $vista)
     *{
     *    //
     *}
     *
     *
     * * Remove the specified resource from storage.
     * *
     * * @param  \App\Models\vista  $vista
     * * @return \Illuminate\Http\Response
     *
     *public function destroy(vista $vista)
     *{
     *    //
     **}
     */
}

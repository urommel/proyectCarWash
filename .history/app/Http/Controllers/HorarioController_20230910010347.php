<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Empleados;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleado = Empleados::all();
        return view('pages/horarios/create', compact('empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $re

        // Obtener el empleado existente por su ID (reemplaza '1' con el ID del empleado)
        $empleado = Empleados::find(1);

        // Crear un registro de horario para el empleado
        $horario = new Horario();
        $horario->empleado_id = $empleado->id;
        $horario->hora_inicio_manana = '08:00:00';
        $horario->hora_fin_manana = '13:00:00';
        $horario->hora_inicio_tarde = '14:00:00';
        $horario->hora_fin_tarde = '19:00:00';
        $horario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

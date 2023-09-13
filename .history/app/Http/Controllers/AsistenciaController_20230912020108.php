<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
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
        //

        $empleados = Empleados::all();
        return view("pages.asistencia.index", compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($empleado_id)
    {
        //
        $fecha = date('Y-m-d');
        $empleado = Empleados::find($empleado_id);

        return view('pages/asistencia/create', compact('empleado', 'fecha'));
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
        return $request;

        // Crear una nueva instancia de Asistencia y asignar los valores
    $asistencia = new Asistencia();
    $asistencia->empleado_id = $request->empleado_id;
    $asistencia->fecha = $request->fecha;
    $asistencia->estado = $request->estado;
    $asistencia->justificacion = $request->justificacion;
    $asistencia->minutos = $request->minutos;

    // Guardar la asistencia en la base de datos
    $asistencia->save();

    // Redireccionar con un mensaje de éxito
    return redirect()->route('asistencia.index')


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

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
        $empleados = Empleados::all(); // Obtén todos los empleados
        $empleado = $empleados->first(); // Obtén el primer empleado de la colección

        return view('pages/horarios/create', compact('empleado',));
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

        return $request->all();


        // Validar los datos del formulario según tus necesidades

        // Recuperar los datos del formulario
        $empleado_id = $request->input('empleado_id');

        // Recorre los días de la semana y almacena los horarios correspondientes
        $dias = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];

        foreach ($dias as $dia) {
            $descansa = $request->has($dia . '_descansa');

            $manana_entrada = $request->input($dia . '_manana_entrada');
            $manana_salida = $request->input($dia . '_manana_salida');

            $tarde_entrada = $request->input($dia . '_tarde_entrada');
            $tarde_salida = $request->input($dia . '_tarde_salida');

            // Guarda los datos en la tabla de horarios
            Horario::create([
                'empleado_id' => $empleado_id,
                'dia' => $dia,
                'descansa' => $descansa,
                'manana_entrada' => $manana_entrada,
                'manana_salida' => $manana_salida,
                'tarde_entrada' => $tarde_entrada,
                'tarde_salida' => $tarde_salida,
            ]);
        }

        // Redirige a la página de éxito o realiza otras acciones necesarias

        return redirect()->route('empleados.index')->with('success', 'Horario registrado correctamente');
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

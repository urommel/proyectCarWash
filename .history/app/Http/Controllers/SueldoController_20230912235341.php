<?php

namespace App\Http\Controllers;

use App\Models\Sueldo;
use App\Models\Empleados;
use Illuminate\Http\Request;

class SueldoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // Obtener todos los empleados
        $empleados = Empleados::all();

        // Crear un array para almacenar los datos de cada empleado
        $data = [];

        // Iterar sobre los empleados
        foreach ($empleados as $empleado) {
            $empleadoData = [];

            // Verificar si el empleado tiene horarios
            if ($empleado->horarios) {
                // Iterar sobre los días de la semana
                foreach (['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia) {
                    // Verificar si el empleado tiene horario para este día
                    $horario = $empleado->horarios->where('dia', $dia)->first();
                    $asistencia = null;

                    // Verificar si el horario existe
                    if ($horario) {
                        // Obtener asistencias del empleado para la semana
                        $asistencia = $empleado->asistencias
                            ->where('fecha', '>=', $inicioDeSemana)
                            ->where('fecha', '<=', $finDeSemana)
                            ->where('estado', 'asistio')
                            ->count();

                        // Calcular el sueldo diario (ajusta la lógica según tus necesidades)
                        $sueldoDiario = $horario->manana_entrada && $horario->manana_salida && $horario->tarde_entrada && $horario->tarde_salida ? $empleado->salario : 0;
                        $sueldoDiario -= $asistencia > 0 ? $empleado->salario / 5 : 0; // Descuento por asistencia
                    } else {
                        $sueldoDiario = 0;
                    }

                    // Almacenar datos del día en el array del empleado
                    $empleadoData[$dia] = [
                        'horario' => $horario,
                        'asistencia' => $asistencia,
                        'sueldo_diario' => $sueldoDiario,
                    ];
                }
            } else {
                // El empleado no tiene horarios
                // Puedes definir un valor predeterminado o un mensaje
                $empleadoData = [
                    'lunes' => [
                        'horario' => null,
                        'asistencia' => null,
                        'sueldo_diario' => 0, // Puedes ajustar esto según tus necesidades
                    ],
                    // Repite para los demás días de la semana
                ];
            }

            // Almacenar datos del empleado en el array principal
            $data[] = [
                'empleado' => $empleado,
                'data' => $empleadoData,
            ];
        }

        return view('tu_vista', compact('data'));




        return view('pages.sueldo.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

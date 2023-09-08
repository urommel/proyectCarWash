<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('pages/empleados/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pages/empleados/create');
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
        // Guardar en la tabla 'empleados'
        $empleado = new Empleados();
        $empleado->nombre = $request->input('nombre');
        $empleado->direccion = $request->input('direccion');
        $empleado->telefono = $request->input('telefono');
        $empleado->correo = $request->input('correo');
        $empleado->cargo = $request->input('cargo');
        $empleado->salario = $request->input('salario');
        $empleado->fecha_inicio = $request->input('fecha_inicio');
        $empleado->save();

        // Crear usuario en la tabla 'users'
        $user = new User();
        $user->name = $request->input('nombre');
        $user->email = $request->input('correo');
        $user->password = Hash::make('contraseña'); // Cambia 'contraseña' por la contraseña real
        $user->save();

        // Asociar empleado con usuario
        $empleado->user()->associate($user);
        $empleado->save();
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

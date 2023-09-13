<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // DB::table('horarios')->insert(
        //     [
        //         [
        //             'id' => 1,
        //             'empleado_id' => 1,

        //             'dia' => 'lunes',
        //             'descansa' => 0,
        //             'manana_entrada' => '08:00',
        //             'manana_salida' => '13:00',
        //             'tarde_entrada' => '14:00',
        //             'tarde_salida' => '18:00',




        //         ],

        //     ]
        // );

        // Definir los días de la semana
        $diasSemana = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];

        // Crear horarios para 5 empleados
        for ($empleadoId = 1; $empleadoId <= 5; $empleadoId++) {
            foreach ($diasSemana as $dia) {
                $descansa = 0;
                $mananaEntrada = '08:00';
                $mananaSalida = '13:00';
                $tardeEntrada = '14:00';
                $tardeSalida = '18:00';

                // Asignar un día de descanso a cada empleado
                if ($empleadoId == $dia) {
                    $descansa = 1;
                }

                // Verificar si es sábado o lunes y asignar un empleado adicional
                if ($dia == 'sábado' || $dia == 'lunes') {
                    $empleadosTrabajando = 4;
                } else {
                    $empleadosTrabajando = 3;
                }

                // Insertar el registro en la base de datos
                for ($i = 1; $i <= $empleadosTrabajando; $i++) {
                    DB::table('horarios')->insert([
                        'empleado_id' => $empleadoId,
                        'dia' => $dia,
                        'descansa' => $descansa,
                        'manana_entrada' => $mananaEntrada,
                        'manana_salida' => $mananaSalida,
                        'tarde_entrada' => $tardeEntrada,
                        'tarde_salida' => $tardeSalida,
                    ]);
                }
            }
        }
    }
}

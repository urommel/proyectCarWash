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

        DB::table('horarios')->insert(
            [
                // [
                //     'id' => 1,
                //     'empleado_id' => 1,

                //     'dia' => 'lunes',
                //     'descansa' => 0,
                //     'manana_entrada' => '08:00',
                //     'manana_salida' => '13:00',
                //     'tarde_entrada' => '14:00',
                //     'tarde_salida' => '18:00',
                // ],

                // Empleado 01
                [
                    'id' => 1,
                    'empleado_id' => 1,
                    'dia' => 'lunes',
                    'descansa' => 1,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 2,
                    'empleado_id' => 1,
                    'dia' => 'martes',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 3,
                    'empleado_id' => 1,
                    'dia' => 'miércoles',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 4,
                    'empleado_id' => 1,
                    'dia' => 'jueves',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 5,
                    'empleado_id' => 1,
                    'dia' => 'viernes',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 6,
                    'empleado_id' => 1,
                    'dia' => 'sábado',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 7,
                    'empleado_id' => 1,
                    'dia' => 'domingo',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],

                // Empleado 02
                [
                    'id' => 8,
                    'empleado_id' => 2,
                    'dia' => 'lunes',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 9,
                    'empleado_id' => 2,
                    'dia' => 'martes',
                    'descansa' => 1,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 10,
                    'empleado_id' => 2,
                    'dia' => 'miércoles',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 11,
                    'empleado_id' => 2,
                    'dia' => 'jueves',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 12,
                    'empleado_id' => 2,
                    'dia' => 'viernes',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 13,
                    'empleado_id' => 2,
                    'dia' => 'sábado',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],
                [
                    'id' => 14,
                    'empleado_id' => 2,
                    'dia' => 'domingo',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',
                ],

                // Empleado 03

                [
                    'id' => 15,
                    'empleado_id' => 3,
                    'dia' => 'lunes',
                    'descansa' => 1,
                    
                ]
            ]
        );


    }
}

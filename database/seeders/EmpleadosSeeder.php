<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('empleados')->insert(
            [
                [
                    'id' => '1',
                    'apellido' => 'Ulco Chavarria',
                    'phone' => '987654321',
                    'dni' => '12345678',
                    'salario' => '40',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '2',
                ],
                // [
                //     'id' => '2',
                //     'apellido' => 'Ulco Chavarria',
                //     'phone' => '963852741',
                //     'dni' => '70456312',
                //     'salario' => '40',
                //     'fecha_inicio' => '2023-10-11',
                //     'user_id' => '3',
                // ],
                [
                    'id' => '2',
                    'apellido' => 'Cavero',
                    'phone' => '912345678',
                    'dni' => '78945612',
                    'salario' => '38',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '3',
                ],
                [
                    'id' => '3',
                    'apellido' => 'Galvez',
                    'phone' => '914567890',
                    'dni' => '79845612',
                    'salario' => '39',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '4',
                ],
                [
                    'id' => '4',
                    'apellido' => 'Gastelo',
                    'phone' => '974563210',
                    'dni' => '20456312',
                    'salario' => '40',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '5',
                ]
            ]
        );
    }
}

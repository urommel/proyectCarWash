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
                    'salario' => '100000',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '2',
                ],
                [
                    'id' => '2',
                    'apellido' => 'Ulco Chavarria',
                    'phone' => '963852741',
                    'dni' => '70456312',
                    'salario' => '100000',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '3',
                ],
                [
                    'id' => '3',
                    'apellido' => 'Cavero',
                    'phone' => '912345678',
                    'dni' => '78945612',
                    'salario' => '100000',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '4',
                ],
                [
                    'id' => '4',
                    'apellido' => 'Galvez',
                    'phone' => '914567890',
                    'dni' => '79845612',
                    'salario' => '100000',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '5',
                ],
                [
                    'id' => '5',
                    'apellido' => 'Gastelo',
                    'phone' => '97',
                    'dni' => '20456312',
                    'salario' => '100000',
                    'fecha_inicio' => '2023-10-11',
                    'user_id' => '2',
                ]
            ]
        );
    }
}

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
                    'apellido' => 'Uzcategui',
                    'phone' => '0414-1234567',
                    'dni' => '12345678',
                    'salario' => '100000',
                    'fecha_ingreso' => '2021-01-01',
                ],
            ]
        );
    }
}

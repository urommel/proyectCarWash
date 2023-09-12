<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                    'nombre' => 'Rommel Eduardo',
                    'apellido' => 'Uzcategui',
                    'cedula' => 'V-26.123.456',
                    'telefono' => '0414-1234567',
                    'correo' => ''
    }
}

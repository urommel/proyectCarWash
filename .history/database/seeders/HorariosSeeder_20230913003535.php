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
                [
                    'id' => 1,
                    'empleado_id' => 1,

                    'dia' => 'lunes',
                    'descansa' => 0,
                    'manana_entrada' => '08:00',
                    'manana_salida' => '13:00',
                    'tarde_entrada' => '14:00',
                    'tarde_salida' => '18:00',




                ],

            ]
        );


    }
}

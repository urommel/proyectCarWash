<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'empleado_id' => 1,
            'dia' => 'lunes',
            'manana_entrada' => '08:00',
            'manana_salida' => '12:00',
            'tarde_entrada' => '14:00',
            'tarde_salida' => '18:00',
        ]
    );
    }
}

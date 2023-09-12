<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id'); // ID del empleado asociado
            $table->string('dia', 20); // Día de la semana
            $table->boolean('descansa')->default(false); // Indicador de descanso
            $table->time('manana_entrada')->nullable(); // Hora de entrada en la mañana
            $table->time('manana_salida')->nullable(); // Hora de salida en la mañana
            $table->time('tarde_entrada')->nullable(); // Hora de entrada en la tarde
            $table->time('tarde_salida')->nullable(); // Hora de salida en la tarde
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados'); // Define la relación con la tabla de empleados

            $table->unsignedBigInteger('empleado_id'); // En lugar de 'empleados_id'
$table->foreign('empleado_id')->references('id')->on('empleados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};

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
            $table->unsignedBigInteger('empleado_id');
            $table->time('hora_inicio_manana'); // Hora de inicio de la mañana (por ejemplo, 08:00:00)
            $table->time('hora_fin_manana');    // Hora de fin de la mañana (por ejemplo, 13:00:00)
            $table->time('hora_inicio_tarde');  // Hora de inicio de la tarde (por ejemplo, 14:00:00)
            $table->time('hora_fin_tarde');     // Hora de fin de la tarde (por ejemplo, 19:00:00)
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
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

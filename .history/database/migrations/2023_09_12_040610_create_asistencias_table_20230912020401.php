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
        Schema::create('asistencias', function (Blueprint $table) {
             $table->unsignedBigInteger('empleado_id');
            $table->date('fecha');
            $table->enum('estado', ['asistio', 'no_asistio', 'tardanza']);
            $table->string('justificacion')->nullable();
            $table->integer('minutos')->nullable();
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
};

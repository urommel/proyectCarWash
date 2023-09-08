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
    $table->time('hora_inicio_manana');
    $table->time('hora_fin_manana');
    $table->time('hora_inicio_tarde');
    $table->time('hora_fin_tarde');
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

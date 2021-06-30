<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('instructores');
            $table->foreignId('user_id')->constrained();
            $table->date('fecha');
            $table->dateTime('entrada');
            $table->dateTime('salida')->nullable();
            $table->foreignId('sucursal_id')->constrained('sucursales');
            $table->foreignId('rutina_id')->constrained();
            $table->timestamps();
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
}

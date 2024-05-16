<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutelarAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutelar_alumno', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tutelar');
            $table->unsignedBigInteger('id_alumno');
            $table->timestamps();
            $table->foreign('id_alumno')->references('id')->on('alumnos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutelar_alumno');
    }
}

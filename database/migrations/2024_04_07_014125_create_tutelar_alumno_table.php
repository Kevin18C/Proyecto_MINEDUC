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
            $table->bigIncrements('id_tutelar');
            $table->string('nombre_tutelar');
            $table->integer('id_alumno');
            $table->timestamps(); // Esto agrega las columnas 'created_at' y 'updated_at'

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

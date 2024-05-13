<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_alumno');
            $table->unsignedBigInteger('id_catedratico');
            $table->unsignedBigInteger('id_grado');
            $table->unsignedBigInteger('id_escuela');
            $table->unsignedBigInteger("id_departamento");
            $table->unsignedBigInteger('id_municipio');
            $table->timestamps(); // Agregara las columnas created_at y updated_at

            $table->foreign('id_catedratico')->references('id')->on('catedraticos');
            $table->foreign('id_grado')->references('id')->on('grados');
            $table->foreign('id_escuela')->references('id')->on('escuelas');
            $table->foreign('id_departamento')->references('id')->on('departamentos');
            $table->foreign('id_municipio')->references('id')->on('municipios');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}

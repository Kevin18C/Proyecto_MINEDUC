<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatedraticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catedraticos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_catedratico');
            $table->unsignedBigInteger('id_escuela');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_grado');
            $table->unsignedBigInteger('id_seccion');
            $table->timestamps(); // Agregara las columnas created_at y updated_at

            $table->foreign('id_escuela')->references('id')->on('escuelas');
            $table->foreign('id_curso')->references('id')->on('cursos');
            $table->foreign('id_grado')->references('id')->on('grados');
            $table->foreign('id_seccion')->references('id')->on('secciones');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catedraticos');
    }
}


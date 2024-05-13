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
            $table->string('curso');
            $table->integer('grado');
            $table->string('seccion');
            $table->timestamps(); // Agregara las columnas created_at y updated_at


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


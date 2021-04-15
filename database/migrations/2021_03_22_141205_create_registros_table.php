<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_alta');
            $table->date('fecha_modif');
            $table->integer('usuario');
            $table->integer('usuario_modif');
            $table->integer('id_proyecto');
            $table->integer('id_subproyecto');
            $table->integer('cod_interno');
            $table->integer('mantis');
            $table->string('tiempo');
            $table->string('observaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}

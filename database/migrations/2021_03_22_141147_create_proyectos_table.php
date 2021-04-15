<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('proyectos', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('nombre');
        //     $table->integer('cod_interno');
        //     $table->integer('desarrollador_principal');
            
            
        // });

        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->bigInteger('cod_interno')->unsigned();
            $table->bigInteger('desarrollador_principal')->unsigned();
            $table->foreign('desarrollador_principal')->references('id')->on('usuarios');
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
        Schema::dropIfExists('proyectos');
    }
}

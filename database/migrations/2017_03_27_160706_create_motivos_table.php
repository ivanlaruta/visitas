<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivos', function (Blueprint $table) {
            $table->increments('id_motivo');
            $table->string('descripcion',50);
            
            $table->enum('estado',['1','0'])->default('1');
            $table->integer('creado_por')->nullable()->unsigned();
            $table->integer('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('creado_por')->references('id_usuario')->on('usuarios');
            $table->foreign('modificado_por')->references('id_usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motivos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametricasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametricas', function (Blueprint $table) {
            
            $table->increments('id_parametrica');
            $table->string('nombre_tabla',20);
            $table->string('id',15);
            $table->string('descripcion',50)->nullable();
            
            $table->enum('estado',['1','0'])->default('1');
            $table->string('creado_por')->nullable()->unsigned();
            $table->string('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('creado_por')->references('usuario')->on('usuarios');
            $table->foreign('modificado_por')->references('usuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametrica');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitantes', function (Blueprint $table) {
            $table->string('ci',15);
            $table->string('ex',2);
            $table->string('nombre',30);
            $table->string('paterno',30);
            $table->string('materno',30)->nullable();
            $table->string('telefono',15);
           
            
            $table->enum('estado',['1','0'])->default('1');
            $table->integer('creado_por')->nullable()->unsigned();
            $table->integer('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->primary('ci');

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
        Schema::dropIfExists('visitante');
    }
}

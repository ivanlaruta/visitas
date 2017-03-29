<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->string('ci',15);
            $table->string('ex',2);
            $table->string('nombre',30);
            $table->string('paterno',30);
            $table->string('materno',30)->nullable();
            $table->string('email',50);
            $table->integer('id_cargo')->unsigned();
            $table->string('id_ubicacion',10)->unsigned();
            $table->string('telefono',15)->nullable();
            
            $table->enum('estado',['1','0'])->default('1');
            $table->integer('creado_por')->nullable()->unsigned();
            $table->integer('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->primary('ci');

            $table->foreign('creado_por')->references('id_usuario')->on('usuarios');
            $table->foreign('modificado_por')->references('id_usuario')->on('usuarios');         

            $table->foreign('id_cargo')->references('id_cargo')->on('cargos');
            $table->foreign('id_ubicacion')->references('id_ubicacion')->on('ubicaciones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}

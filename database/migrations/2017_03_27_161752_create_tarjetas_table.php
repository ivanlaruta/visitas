<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->string('id_tarjeta',15);
            $table->string('tipo_tarjeta',20)->nullable();
            $table->string('psw',15)->nullable();

            $table->string('ci_empleado',15)->nullable()->unsigned();
            
            $table->enum('estado',['1','0'])->default('1');
            $table->string('creado_por')->nullable()->unsigned();
            $table->string('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->primary('id_tarjeta');

            $table->foreign('creado_por')->references('usuario')->on('usuarios');
            $table->foreign('modificado_por')->references('usuario')->on('usuarios');
            $table->foreign('ci_empleado')->references('ci')->on('empleados');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarjeta');
    }
}

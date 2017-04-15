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
            $table->string('tipo_tarjeta',30)->nullable();
            $table->string('psw',15)->nullable();
             $table->string('id_ubicacion',10)->nullable()->unsigned();
            $table->string('ci_empleado',15)->nullable()->unsigned();
            
            $table->enum('estado',['1','0'])->default('1');
            $table->enum('estado_prestamo',['1','0'])->default('1');
           
            $table->string('creado_por')->nullable()->unsigned();
            $table->string('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->primary('id_tarjeta');

            $table->foreign('creado_por')->references('usuario')->on('users');
            $table->foreign('modificado_por')->references('usuario')->on('users');
            $table->foreign('ci_empleado')->references('ci')->on('empleados');
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
        Schema::dropIfExists('tarjeta');
    }
}

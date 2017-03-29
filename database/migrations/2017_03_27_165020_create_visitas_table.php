<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->increments('id_visita');
            $table->string('ci_visitante',15)->unsigned();
            $table->string('tipo_doc',10);
            $table->date('fecha');
            $table->time('hora_entrada');
            $table->time('hora_salida')->nullable();
            $table->integer('id_motivo');
            $table->string('ci_empleado',15)->unsigned();
            $table->string('id_tarjeta',15)->unsigned();
            $table->string('observaciones')->nullable();

            $table->enum('estado_visita',['1','0'])->default('1');
            $table->integer('creado_por')->nullable()->unsigned();
            $table->integer('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('creado_por')->references('id_usuario')->on('usuarios');
            $table->foreign('modificado_por')->references('id_usuario')->on('usuarios');

            $table->foreign('ci_visitante')->references('ci')->on('visitantes');
            $table->foreign('ci_empleado')->references('ci')->on('empleados');
            $table->foreign('id_motivo')->references('id_motivo')->on('motivos');
            $table->foreign('id_tarjeta')->references('id_tarjeta')->on('tarjetas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visita');
    }
}

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
            $table->time('hora_salida');
            $table->string('id_motivo',10);
            $table->string('ci_empleado',15)->unsigned();
            $table->string('id_tarjeta',15)->unsigned();
            $table->string('observaciones');
            $table->string('estado_visita',1);
            $table->timestamps();

           
            $table->foreign('ci_visitante')->references('ci')->on('visitantes');
           // $table->foreign('tipo_doc')->references('id_parametrica')->on('parametrica');
           // $table->foreign('id_motivo')->references('id_parametrica')->on('parametrica');
            $table->foreign('ci_empleado')->references('ci')->on('empleados');
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

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
            $table->date('fecha_entrada');
            $table->time('hora_entrada');
            $table->date('fecha_salida')->nullable();
            $table->time('hora_salida')->nullable();
            $table->integer('id_motivo');
            $table->string('ci_empleado',15)->unsigned();
            $table->string('id_tarjeta',15)->unsigned();
            $table->string('id_ubicacion',10)->nullable()->unsigned();
            $table->string('observaciones')->nullable();

            $table->enum('estado_visita',['1','0','2'])->default('1');
            $table->string('creado_por')->nullable()->unsigned();
            $table->string('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('creado_por')->references('usuario')->on('users');
            $table->foreign('modificado_por')->references('usuario')->on('users');

            $table->foreign('ci_visitante')->references('ci')->on('visitantes');
            $table->foreign('ci_empleado')->references('ci')->on('empleados');
            $table->foreign('id_motivo')->references('id_motivo')->on('motivos');
            $table->foreign('id_tarjeta')->references('id_tarjeta')->on('tarjetas');
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
        Schema::dropIfExists('visita');
    }
}

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
            $table->string('observacion')->nullable();

            $table->enum('estado',['0','1'])->default('1');
            $table->enum('estado_prestamo',['1','0','2','3'])->default('1');////0 en prestamo ,1 disponible, 2 observada.

            // para perdida de tarjetas
            $table->string('boleta_deposito',20)->nullable();
            $table->string('cuenta',20)->nullable();
            $table->date('fecha_deposito')->nullable();
            $table->integer('monto')->nullable();
            $table->string('ci_visitante',100)->nullable()->unsigned();

            //*************************//

             
           
            $table->string('creado_por')->nullable()->unsigned();
            $table->string('modificado_por')->nullable()->unsigned();
            $table->timestamps();

            $table->primary('id_tarjeta');

            $table->foreign('creado_por')->references('usuario')->on('users');
            $table->foreign('modificado_por')->references('usuario')->on('users');
            $table->foreign('ci_empleado')->references('ci')->on('empleados');
            $table->foreign('id_ubicacion')->references('id_ubicacion')->on('ubicaciones');       
            $table->foreign('ci_visitante')->references('ci')->on('visitantes');  
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('ci_empleado',15)->nullable()->unsigned();
            $table->string('usuario',30);
            $table->string('password',100);
            $table->enum('estado',['1','0'])->default('1');
            $table->string('id_rol',1)->unsigned();

            $table->timestamps();
           //$table->foreign('ci_empleado')->references('ci')->on('empleados');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}

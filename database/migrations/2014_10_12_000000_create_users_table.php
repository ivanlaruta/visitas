<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->string('usuario');
            $table->string('password');
            $table->string('ci_empleado',15)->nullable()->unsigned();//ci_empleado
            $table->enum('estado',['1','0','2'])->default('1');
            $table->string('id_rol',1)->unsigned();

            $table->primary('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

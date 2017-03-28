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
            $table->string('estado',1);
            $table->timestamps();

            $table->primary('ci');
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

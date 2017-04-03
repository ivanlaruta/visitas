<?php

use Illuminate\Database\Seeder;

class SuperUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
    	    DB::table('usuarios')->insert([
            'usuario' => 'superusuario',
            'password' => bcrypt('12345'),
            //'ci_empleado' => '',
            'id_rol'=> '1',
        ]);
    }
}

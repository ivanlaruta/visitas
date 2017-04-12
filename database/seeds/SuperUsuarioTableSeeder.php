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
    	    DB::table('users')->insert([
           
            'usuario' => 'admin',
            'password' => bcrypt('12345'),
            //'ci_empleado' => '8264209',
            'id_rol'=> '1',
        ]);
    }
}

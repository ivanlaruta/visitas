<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('empleados')->delete();

       	DB::table('empleados')->insert([

            'ci' => '00',
            'ex' => 'LP',
            'nombre' => 'super',
            'paterno'=> 'user',            
            'materno' => '',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       	DB::table('empleados')->insert([

            'ci' => '01',
            'ex' => 'LP',
            'nombre' => 'operador',
            'paterno'=> '1',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       	DB::table('empleados')->insert([

            'ci' => '02',
            'ex' => 'LP',
            'nombre' => 'administrador',
            'paterno'=> '1',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       	
    }
}

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

            'ci' => '8264209',
            'ex' => 'LP',
            'nombre' => 'Ivan',
            'paterno'=> 'Laruta',            
            'materno' => 'Espinal',
            'email' => 'ivan.laruta@toyosa.com',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       	DB::table('empleados')->insert([

            'ci' => '12345678',
            'ex' => 'LP',
            'nombre' => 'Melisa',
            'paterno'=> 'Tarifa',            
            'materno' => 'Portugal',
            'email' => 'maria.tarifa@toyosa.com',
            'id_cargo' => '2',
            'id_ubicacion'=> '131C',
            'telefono'=> '123546',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       	DB::table('empleados')->insert([

            'ci' => '87654321',
            'ex' => 'LP',
            'nombre' => 'jose',
            'paterno'=> 'Pacheco',            
            'materno' => 'Medina',
            'email' => 'jose.pacheco@toyosa.com',
            'id_cargo' => '4',
            'id_ubicacion'=> '131C',
            'telefono'=> '75698412',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       	DB::table('empleados')->insert([

            'ci' => '12345',
            'ex' => 'LP',
            'nombre' => 'Patricia',
            'paterno'=> 'Mollinedo',            
            'materno' => 'Medina',
            'email' => 'pati.mo@toyosa.com',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> '65575672',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
       	DB::table('empleados')->insert([

            'ci' => '54321',
            'ex' => 'LP',
            'nombre' => 'Carlos',
            'paterno'=> 'Roca',            
            'materno' => 'Salas',
            'email' => 'carlos.roca@toyosa.com',
            'id_cargo' => '4',
            'id_ubicacion'=> '131C',
            'telefono'=> '879456',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}

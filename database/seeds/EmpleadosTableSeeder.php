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

        DB::table('empleados')->insert([

            'ci' => '1 ',
            'ex' => 'LP',
            'nombre' => 'MIRNA',
            'paterno'=> ' SORUCO',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '2 ',
            'ex' => 'LP',
            'nombre' => 'GABRIEL',
            'paterno'=> ' HERBAS',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '3 ',
            'ex' => 'LP',
            'nombre' => 'MANUEL',
            'paterno'=> ' CERNADAS',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '4 ',
            'ex' => 'LP',
            'nombre' => 'CRISTHIAN',
            'paterno'=> ' DE LA TORRE',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '5 ',
            'ex' => 'LP',
            'nombre' => 'CESAR',
            'paterno'=> ' TABOADA',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '6 ',
            'ex' => 'LP',
            'nombre' => 'OSCAR',
            'paterno'=> ' SANCHEZ ',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '7 ',
            'ex' => 'LP',
            'nombre' => 'DAVID',
            'paterno'=> ' MICHEL',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '8 ',
            'ex' => 'LP',
            'nombre' => 'JIMENA',
            'paterno'=> ' YANGUAS',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '9 ',
            'ex' => 'LP',
            'nombre' => 'ADRIANA',
            'paterno'=> ' JUSTINIANO',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '10',
            'ex' => 'LP',
            'nombre' => 'CINTHYA',
            'paterno'=> ' RUIZ',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '11',
            'ex' => 'LP',
            'nombre' => 'MARIA TERESA',
            'paterno'=> ' SOSA',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '12',
            'ex' => 'LP',
            'nombre' => 'ZULEMA',
            'paterno'=> ' YEPEZ',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '13',
            'ex' => 'LP',
            'nombre' => 'INGRID',
            'paterno'=> ' CRESPO',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '14',
            'ex' => 'LP',
            'nombre' => 'ROLANDO',
            'paterno'=> ' QUISPE',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '15',
            'ex' => 'LP',
            'nombre' => 'OSCAR',
            'paterno'=> ' NAVARRO',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '16',
            'ex' => 'LP',
            'nombre' => 'FABIANA',
            'paterno'=> ' DUNN ',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '17',
            'ex' => 'LP',
            'nombre' => 'JOSE',
            'paterno'=> ' MAMANI',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '18',
            'ex' => 'LP',
            'nombre' => 'JOSE',
            'paterno'=> ' ASTETE',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        
        DB::table('empleados')->insert([

            'ci' => '20',
            'ex' => 'LP',
            'nombre' => 'GARY',
            'paterno'=> ' SANCHEZ',            
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

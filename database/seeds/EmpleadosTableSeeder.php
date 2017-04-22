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
            'estado'=>'0',
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
            'estado'=>'0',
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
            'estado'=>'0',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        /* 
        /--------------
        */
        
        DB::table('empleados')->insert([

            'ci' => '1',
            'ex' => 'LP',
            'nombre' => 'MIRNA',
            'paterno'=> 'SORUCO',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '2',
            'ex' => 'LP',
            'nombre' => 'GABRIEL',
            'paterno'=> 'HERBAS',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '3',
            'ex' => 'LP',
            'nombre' => 'MANUEL',
            'paterno'=> 'CERNADAS',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '4',
            'ex' => 'LP',
            'nombre' => 'CRISTHIAN',
            'paterno'=> 'DE LA TORRE',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '5',
            'ex' => 'LP',
            'nombre' => 'CESAR',
            'paterno'=> 'TABOADA',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '6',
            'ex' => 'LP',
            'nombre' => 'OSCAR',
            'paterno'=> 'SANCHEZ ',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '7',
            'ex' => 'LP',
            'nombre' => 'DAVID',
            'paterno'=> 'MICHEL',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '8',
            'ex' => 'LP',
            'nombre' => 'JIMENA',
            'paterno'=> 'YANGUAS',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('empleados')->insert([

            'ci' => '9',
            'ex' => 'LP',
            'nombre' => 'ADRIANA',
            'paterno'=> 'JUSTINIANO',            
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
            'paterno'=> 'RUIZ',            
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
            'paterno'=> 'SOSA',            
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
            'paterno'=> 'YEPEZ',            
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
            'paterno'=> 'CRESPO',            
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
            'paterno'=> 'QUISPE',            
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
            'paterno'=> 'NAVARRO',            
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
            'paterno'=> 'DUNN ',            
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
            'paterno'=> 'MAMANI',            
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
            'paterno'=> 'ASTETE',            
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
            'paterno'=> 'SANCHEZ',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '1',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);


          // POLICIAS//

        
        DB::table('empleados')->insert([

            'ci' => '3429410',
            'ex' => 'LP',
            'nombre' => 'JULIO',
            'paterno'=> 'CHOQUE',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '4250955',
            'ex' => 'LP',
            'nombre' => 'CRISPIN',
            'paterno'=> 'RAMOS',            
            'materno' => 'CRUZ',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       //  DB::table('empleados')->insert([

       //      'ci' => '102',
       //      'ex' => 'LP',
       //      'nombre' => 'ELOY',
       //      'paterno'=> ' ROJAS',            
       //      'materno' => 'QUISPE',
       //      'email' => ' ',
       //      'id_cargo' => '3',
       //      'id_ubicacion'=> '131C',
       //      'telefono'=> ' ',
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
        // ---------------------
       //  DB::table('empleados')->insert([

       //      'ci' => '103',
       //      'ex' => 'LP',
       //      'nombre' => 'CRISTOBAL',
       //      'paterno'=> ' APAZA',            
       //      'materno' => 'FLORES',
       //      'email' => ' ',
       //      'id_cargo' => '3',
       //      'id_ubicacion'=> '135',
       //      'telefono'=> ' ',
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

        DB::table('empleados')->insert([

            'ci' => '3349703',
            'ex' => 'LP',
            'nombre' => 'EMILIANO',
            'paterno'=> 'VALENCIA',            
            'materno' => 'CHOQUE',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '135',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '5483466',
            'ex' => 'LP',
            'nombre' => 'ELESIO',
            'paterno'=> 'CHURA',            
            'materno' => 'MENA',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '135',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       //  DB::table('empleados')->insert([

       //      'ci' => '106',
       //      'ex' => 'LP',
       //      'nombre' => 'LAURIANO',
       //      'paterno'=> ' LUCANA',            
       //      'materno' => 'FLORES',
       //      'email' => ' ',
       //      'id_cargo' => '3',
       //      'id_ubicacion'=> '135',
       //      'telefono'=> ' ',
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);
//----------------
        DB::table('empleados')->insert([

            'ci' => '4329223',
            'ex' => 'LP',
            'nombre' => 'ALFREDO',
            'paterno'=> 'RAMOS',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '4369324',
            'ex' => 'LP',
            'nombre' => 'HEFFNER',
            'paterno'=> 'VARGAS',            
            'materno' => 'TUMIRI',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        //-------------------------
        

        DB::table('empleados')->insert([

            'ci' => '3884838',
            'ex' => 'LP',
            'nombre' => 'GREGORIO',
            'paterno'=> 'MOLLO',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '137',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '2711050',
            'ex' => 'LP',
            'nombre' => 'RUFINO',
            'paterno'=> 'CUSI',            
            'materno' => 'APAZA',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '137',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        //---------------------------------------

        DB::table('empleados')->insert([

            'ci' => '4742071',
            'ex' => 'LP',
            'nombre' => 'SEFERINO',
            'paterno'=> 'APAZA',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
//-------------------------
       //  DB::table('empleados')->insert([

       //      'ci' => '112',
       //      'ex' => 'LP',
       //      'nombre' => 'ANGEL',
       //      'paterno'=> ' MAMANI',            
       //      'materno' => ' ',
       //      'email' => ' ',
       //      'id_cargo' => '3',
       //      'id_ubicacion'=> '134',
       //      'telefono'=> ' ',
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

       //  DB::table('empleados')->insert([

       //      'ci' => '113',
       //      'ex' => 'LP',
       //      'nombre' => 'SAMUEL',
       //      'paterno'=> ' ESPEJO',            
       //      'materno' => ' ',
       //      'email' => ' ',
       //      'id_cargo' => '3',
       //      'id_ubicacion'=> '134',
       //      'telefono'=> ' ',
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

       //  DB::table('empleados')->insert([

       //      'ci' => '114',
       //      'ex' => 'LP',
       //      'nombre' => 'PORFIRIO',
       //      'paterno'=> ' MAMANI',            
       //      'materno' => ' ',
       //      'email' => ' ',
       //      'id_cargo' => '3',
       //      'id_ubicacion'=> '134',
       //      'telefono'=> ' ',
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

        DB::table('empleados')->insert([

            'ci' => '3419900',
            'ex' => 'LP',
            'nombre' => 'NILO',
            'paterno'=> 'TOLA',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '134',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '429115',
            'ex' => 'LP',
            'nombre' => 'BARTOLOME',
            'paterno'=> 'TARQUI',            
            'materno' => ' ',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '134',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

       //  DB::table('empleados')->insert([

       //      'ci' => '117',
       //      'ex' => 'LP',
       //      'nombre' => 'NARCISO',
       //      'paterno'=> ' COPA',            
       //      'materno' => ' ',
       //      'email' => ' ',
       //      'id_cargo' => '3',
       //      'id_ubicacion'=> '118',
       //      'telefono'=> ' ',
       //      'creado_por'=> 'admin',
       //      'modificado_por'=>'admin',
       // ]);

        DB::table('empleados')->insert([

            'ci' => '3443481',
            'ex' => 'LP',
            'nombre' => 'RODOLFO',
            'paterno'=> 'ROMERO',            
            'materno' => 'CALA',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '118',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '5475279',
            'ex' => 'LP',
            'nombre' => 'ANCELMO',
            'paterno'=> 'MAMANI',            
            'materno' => 'CHAMBI',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '2642209',
            'ex' => 'LP',
            'nombre' => 'FELIX',
            'paterno'=> 'ALI',            
            'materno' => 'QUISPE',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '2646176',
            'ex' => 'LP',
            'nombre' => 'EFRAIN',
            'paterno'=> 'HUAYHUA',            
            'materno' => 'WAQUI',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '4989109',
            'ex' => 'LP',
            'nombre' => 'SEBASTIAN',
            'paterno'=> 'FLORES',            
            'materno' => 'QUISPE',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '4978212',
            'ex' => 'LP',
            'nombre' => 'FRANCISCO',
            'paterno'=> 'TICONA',            
            'materno' => 'CALLIZAYA',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '6066059',
            'ex' => 'LP',
            'nombre' => 'RUBEN',
            'paterno'=> 'PAREDES',            
            'materno' => '',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('empleados')->insert([

            'ci' => '2504838',
            'ex' => 'LP',
            'nombre' => 'PEDRO',
            'paterno'=> 'MAYTA',            
            'materno' => 'GABINCHA',
            'email' => ' ',
            'id_cargo' => '3',
            'id_ubicacion'=> '131C',
            'telefono'=> ' ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

    }
}

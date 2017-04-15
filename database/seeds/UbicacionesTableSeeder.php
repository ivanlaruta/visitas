<?php

use Illuminate\Database\Seeder;

class UbicacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones')->insert([

            'id_ubicacion' => '131C',
            'nombre' => 'OFICINA CENTRAL',
            'ciudad' => 'LA PAZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('ubicaciones')->insert([

            'id_ubicacion' => '137',
            'nombre' => 'OFICINA CALACOTO',
            'ciudad' => 'LA PAZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('ubicaciones')->insert([

            'id_ubicacion' => '135',
            'nombre' => 'CURVA DE HOLGUIN',
            'ciudad' => 'LA PAZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('ubicaciones')->insert([

            'id_ubicacion' => '134',
            'nombre' => 'PLANTA EL ALTO SHOW ROOM',
            'ciudad' => 'EL ALTO',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('ubicaciones')->insert([

            'id_ubicacion' => '118',
            'nombre' => 'ANEXO INLASA',
            'ciudad' => 'LA PAZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);





    }
}

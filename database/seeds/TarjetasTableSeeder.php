<?php

use Illuminate\Database\Seeder;

class TarjetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '10005',
            'tipo_tarjeta' => 'Visita',
            'psw' => '2256',
            'id_ubicacion' => '131C',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '10006',
            'tipo_tarjeta' => 'Visita',
            'psw' => '2256',
            'id_ubicacion' => '131C',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '10007',
            'tipo_tarjeta' => 'Visita',
            'psw' => '2256',
            'id_ubicacion' => '131C',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '10008',
            'tipo_tarjeta' => 'Visita',
            'psw' => '2256',
            'id_ubicacion' => '131C',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '10009',
            'tipo_tarjeta' => 'Visita',
            'psw' => '2256',
            'id_ubicacion' => '131C',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '10010',
            'tipo_tarjeta' => 'Visita',
            
            'id_ubicacion' => '131C',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}
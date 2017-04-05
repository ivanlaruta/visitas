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

            'id_tarjeta' => '1',
            'tipo_tarjeta' => 'VISITA',
            'psw' => '2256',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '2',
            'tipo_tarjeta' => 'PERSONAL AUTORIZADO',
            'psw' => '2256',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('tarjetas')->insert([

            'id_tarjeta' => '3',
            'tipo_tarjeta' => 'PASANTE',
            'psw' => '2256',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}
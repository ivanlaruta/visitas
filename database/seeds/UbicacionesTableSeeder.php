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
            'nombre' => 'Oficina central',
            'ciudad' => 'La Paz',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('ubicaciones')->insert([

            'id_ubicacion' => '131MI',
            'nombre' => 'Toyosa Miraflores',
            'ciudad' => 'La Paz',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('ubicaciones')->insert([

            'id_ubicacion' => '137',
            'nombre' => 'Oficina Calacoto',
            'ciudad' => 'El Alto',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}

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
            'nombre' => 'OFICINA CENTRAL ',
            'ciudad' => 'La Paz',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);
    }
}

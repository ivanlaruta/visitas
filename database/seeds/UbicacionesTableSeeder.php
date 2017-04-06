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
            'ciudad' => 'LP',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}

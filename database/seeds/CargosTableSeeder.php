<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('cargos')->delete();

        DB::table('cargos')->insert([

            'descripcion' => 'Desarrollador',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Recepcion',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Oficial de turno',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Vendedor',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}

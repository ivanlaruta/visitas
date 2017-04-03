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
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Secretaria',       
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Oficial de turno',       
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Vendedor',       
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);
    }
}

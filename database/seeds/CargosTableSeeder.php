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

            'descripcion' => 'VENTAS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'REPUESTOS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'POLICIA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'RECPECION',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'LICITACIONES',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'GERENCIA REGIONAL',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'CONCORDIA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'RRHH',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'IMPORTACIONES',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'MARKETING',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'SISTEMAS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'FINANZAS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'TRAMITES',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'REPUESTOS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'CONTABILIDAD',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'ARQUITECTURA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'GERENCIA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}

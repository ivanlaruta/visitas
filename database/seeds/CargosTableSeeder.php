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

            'descripcion' => 'Ventas',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Repuestos',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Oficial',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('cargos')->insert([

            'descripcion' => 'Recpecion',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Licitaciones',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Gerencia regional',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Concordia',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'RRHH',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Importaciones',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Marketing',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Sistemas',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Finanzas',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Tramites',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Repuestos',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Contabilidad',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Arquitectura',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('cargos')->insert([

            'descripcion' => 'Gerencia',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class MotivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivos')->insert([
            'descripcion' => 'VISITA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
            
        ]);
        DB::table('motivos')->insert([
            'descripcion' => 'ENTREVISTA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('motivos')->insert([
            'descripcion' => 'REUNION',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('motivos')->insert([
            'descripcion' => 'ENTREGA DE CARTA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
    }
}

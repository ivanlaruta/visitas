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
            'descripcion' => 'visita',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
            
        ]);
        DB::table('motivos')->insert([
            'descripcion' => 'entrevista',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
        ]);
        DB::table('motivos')->insert([
            'descripcion' => 'reunion',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
        ]);
        DB::table('motivos')->insert([
            'descripcion' => 'entrega de carta',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
        ]);
    }
}

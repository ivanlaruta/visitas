<?php

use Illuminate\Database\Seeder;

class ParametricasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'rol',
            'id' => '1',
            'descripcion' => 'administrador',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'rol',
            'id' => '0',
            'descripcion' => 'operador',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'estado',
            'id' => '0',
            'descripcion' => 'desactivado',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'estado',
            'id' => '0',
            'descripcion' => 'activo',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
        ]);

    }
}

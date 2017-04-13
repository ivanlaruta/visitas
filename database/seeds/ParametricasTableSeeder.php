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
            'nombre_tabla' => 'ROL',
            'id' => '1',
            'descripcion' => 'ADMINISTRADOR',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'ROL',
            'id' => '0',
            'descripcion' => 'OPERADOR',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'ESTADO',
            'id' => '0',
            'descripcion' => 'DESACTIVO',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'ESTADO',
            'id' => '1',
            'descripcion' => 'ACTIVO',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'LP',
            'descripcion' => 'La Paz',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
          DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'OR',
            'descripcion' => 'Oruro',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
           DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'PT',
            'descripcion' => 'Potosi',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
            DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'CH',
            'descripcion' => 'Chuquisaca',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
             DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'TJ',
            'descripcion' => 'Tarija',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
              DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'CB',
            'descripcion' => 'Cochabamba',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
               DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'SC',
            'descripcion' => 'Santa Cruz',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
                DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'BN',
            'descripcion' => 'Beni',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
                 DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'PA',
            'descripcion' => 'Pando',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);

             DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_DOC',
            'id' => 'CI',
            'descripcion' => 'Cedula de identidad',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_DOC',
            'id' => 'LIC',
            'descripcion' => 'Licencia de conducir',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);

        DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_TAR',
            'id' => 'VIS',
            'descripcion' => 'VISITA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_TAR',
            'id' => 'PA',
            'descripcion' => 'PERSONAL AUTORIZADO',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
          DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_TAR',
            'id' => 'PS',
            'descripcion' => 'PASANTE',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
           DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_TAR',
            'id' => 'PRE',
            'descripcion' => 'PRESIDENCIA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_TAR',
            'id' => 'PRE',
            'descripcion' => 'VICEPRESIDENCIA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
           DB::table('parametricas')->insert([
            'nombre_tabla' => 'CIUDAD',
            'id' => 'LP',
            'descripcion' => 'La paz',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);

    }
}

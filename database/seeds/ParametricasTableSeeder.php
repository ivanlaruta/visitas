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
        //ROLES
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'ROL',
            'id' => '1',
            'descripcion' => 'ADMINISTRADOR',
            'estado'=>'0',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',

        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'ROL',
            'id' => '0',
            'descripcion' => 'OPERADOR',
            'estado'=>'0',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);

         //ESTADOS

         DB::table('parametricas')->insert([
            'nombre_tabla' => 'ESTADO',
            'id' => '0',
            'descripcion' => 'DESACTIVO',
            'estado'=>'0',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'ESTADO',
            'id' => '1',
            'descripcion' => 'ACTIVO',
            'estado'=>'0',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);

         // EXPEDIDOS
         DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'LP',
            'descripcion' => 'LA PAZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
          DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'OR',
            'descripcion' => 'ORURO',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
           DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'PT',
            'descripcion' => 'POTOSI',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
            DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'CH',
            'descripcion' => 'CHUQUISACA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
             DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'TJ',
            'descripcion' => 'TARIJA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
              DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'CB',
            'descripcion' => 'COCHABAMBA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
               DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'SC',
            'descripcion' => 'SANTA CRUZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
                DB::table('parametricas')->insert([
            'nombre_tabla' => 'EXPEDIDO',
            'id' => 'BN',
            'descripcion' => 'BENI',
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

                 // TIPO DOCUMNETO
             DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_DOC',
            'id' => 'CI',
            'descripcion' => 'CEDULA DE IDENTIDAD',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'TIPO_DOC',
            'id' => 'LIC',
            'descripcion' => 'LICENCIA DE CONDUCIR',
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

        //ciudades

        DB::table('parametricas')->insert([
            'nombre_tabla' => 'CIUDAD',
            'id' => 'LP',
            'descripcion' => 'LA PAZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'CIUDAD',
            'id' => 'CB',
            'descripcion' => 'COCHABAMBA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'CIUDAD',
            'id' => 'OR',
            'descripcion' => 'ORURO',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'CIUDAD',
            'id' => 'PT',
            'descripcion' => 'POTOSI',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'CIUDAD',
            'id' => 'SCZ',
            'descripcion' => 'SANTA CRUZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);


     // bancos

        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'BNB',
            'descripcion' => 'BANCO NACIONAL DE BOLIVIA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'FIE',
            'descripcion' => 'BANCO FIE',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'BG',
            'descripcion' => 'BANCO GANADERO',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'BU',
            'descripcion' => 'BANCO UNION',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'BCP',
            'descripcion' => 'BANCO DE CREDITO DEL PERU',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'SOL',
            'descripcion' => 'BANCO SOL',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'BISA',
            'descripcion' => 'BANCO BISA',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'BANCO',
            'id' => 'BMSC',
            'descripcion' => 'BANCO MERCANTIL SANTA CRUZ',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
        ]);

        //==================================
        //             Areas     
        //==================================

        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'COMERCIAL',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'LEGAL',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'CONTABILIDAD',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'CARTERA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'SISTEMAS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'SERVICIOS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'MARKETING',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'FINANZAS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'AUDITORÍA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'RECURSOS HUMANOS',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'PRESIDENCIA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'VICEPRECIDENCIA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'PROYECTOS ESPECIALES',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'IMPORTACIONES',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'ANALISIS COMERCIAL',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'RECINTO ADUANERO',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'GERENCIA GENERAL',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);

        DB::table('parametricas')->insert([
            'nombre_tabla' => 'AREA',
            'id' => ' ',
            'descripcion' => 'POLICIA',       
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);



    }
}

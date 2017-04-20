<?php

use Illuminate\Database\Seeder;

class visitantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

       	DB::table('visitantes')->insert([

            'ci' => '7897465',
            'ex' => 'LP',
            'nombre' => 'PEDRO',
            'paterno'=> 'MARQUEZ',            
            'materno' => 'LOM',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '2587456',
            'ex' => 'LP',
            'nombre' => 'PETER',
            'paterno'=> 'ALVEIRO',            
            'materno' => 'ROCA',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '87954624',
            'ex' => 'LP',
            'nombre' => 'ANAI',
            'paterno'=> 'PEREZ',            
            'materno' => 'CASTRO',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '8996547',
            'ex' => 'LP',
            'nombre' => 'MELIZA',
            'paterno'=> 'CORTEZ',            
            'materno' => 'ROJAS',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);


    }
}

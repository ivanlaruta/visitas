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
            'nombre' => 'Pedro',
            'paterno'=> 'Marquez',            
            'materno' => 'Lom',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '2587456',
            'ex' => 'LP',
            'nombre' => 'Peter',
            'paterno'=> 'Alveiro',            
            'materno' => 'Roca',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '87954624',
            'ex' => 'LP',
            'nombre' => 'Anai',
            'paterno'=> 'Perez',            
            'materno' => 'CAstro',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '8996547',
            'ex' => 'LP',
            'nombre' => 'Meliza',
            'paterno'=> 'Cortez',            
            'materno' => 'Rojas',
            'telefono'=> '77756103',
            'creado_por'=> 'admin',
            'modificado_por'=>'admin',
       ]);


    }
}

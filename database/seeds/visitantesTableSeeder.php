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

            'ci' => '123',
            'ex' => 'LP',
            'nombre' => 'Pedro',
            'paterno'=> 'Marquez',            
            'materno' => 'Lom',
            'telefono'=> '77756103',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '321',
            'ex' => 'LP',
            'nombre' => 'Peter',
            'paterno'=> 'Alveiro',            
            'materno' => 'Roca',
            'telefono'=> '77756103',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '456',
            'ex' => 'LP',
            'nombre' => 'Anai',
            'paterno'=> 'Perez',            
            'materno' => 'CAstro',
            'telefono'=> '77756103',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);
       	DB::table('visitantes')->insert([

            'ci' => '654',
            'ex' => 'LP',
            'nombre' => 'Meliza',
            'paterno'=> 'Cortez',            
            'materno' => 'Rojas',
            'telefono'=> '77756103',
            'creado_por'=> 'superusuario',
            'modificado_por'=>'superusuario',
       ]);


    }
}

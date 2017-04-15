<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
           
            'usuario' => 'operador',
            'password' => bcrypt('visitasoperador'),
            'ci_empleado' => '01',
            'id_rol'=> '0',
        ]);

         DB::table('users')->insert([
            
            'usuario' => 'administrador',
            'password' => bcrypt('visitasadministrador'),
            'ci_empleado' => '02',
            'id_rol'=> '1',
        ]);

    }
}

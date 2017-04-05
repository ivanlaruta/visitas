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
           
            'usuario' => 'ivan',
            'password' => bcrypt('12345'),
            'ci_empleado' => '8264209',
            'id_rol'=> '1',
        ]);

         DB::table('users')->insert([
            
            'usuario' => 'tarifa',
            'password' => bcrypt('12345'),
            'ci_empleado' => '12345678',
            'id_rol'=> '1',
        ]);

    }
}

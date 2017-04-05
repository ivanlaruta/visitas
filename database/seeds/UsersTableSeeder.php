<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        DB::table('users')->insert([
           
            'usuario' => 'ivan.laruta',
            'password' => bcrypt('12345'),
            'name' => '8264209',
            'id_rol'=> '1',
        ]);

         DB::table('users')->insert([
            
            'usuario' => 'maria.tarifa',
            'name' => '8264209',
            'password' => bcrypt('12345'),
            'name' => '12345678',
            'id_rol'=> '1',
        ]);
    }
}

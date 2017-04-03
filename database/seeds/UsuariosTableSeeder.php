<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('usuarios')->insert([
            'usuario' => 'ivan.laruta',
            'password' => bcrypt('12345'),
            'ci_empleado' => '8264209',
            'id_rol'=> '1',
        ]);
        DB::table('usuarios')->insert([
            'usuario' => 'maria.tarifa',
            'password' => bcrypt('12345'),
            'ci_empleado' => '12345678',
            'id_rol'=> '0',
        ]);
        DB::table('usuarios')->insert([
            'usuario' => 'jose.pacheco',
            'password' => bcrypt('12345'),
            'ci_empleado' => '87654321',
            'id_rol'=> '0',
        ]);
        
    }
}

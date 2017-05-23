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
            'password' => bcrypt('12345'),
            'ci_empleado' => '01',
            'estado' => '0',
            'id_rol'=> '0',
        ]);

         DB::table('users')->insert([
            
            'usuario' => 'administrador',
            'password' => bcrypt('12345'),
            'ci_empleado' => '02',
            'estado' => '0',
            'id_rol'=> '1',
        ]);

        // DB::table('users')->insert([
        //     'usuario' => 'PEDRO.MAYTA',
        //     'password' => bcrypt('2504838'),
        //     'ci_empleado' => '2504838',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'FELIX.ALI',
        //     'password' => bcrypt('2642209'),
        //     'ci_empleado' => '2642209',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'EFRAIN.HUAYHUA',
        //     'password' => bcrypt('2646176'),
        //     'ci_empleado' => '2646176',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'RUFINO.CUSI',
        //     'password' => bcrypt('2711050'),
        //     'ci_empleado' => '2711050',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'EMILIANO.VALENCIA',
        //     'password' => bcrypt('3349703'),
        //     'ci_empleado' => '3349703',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'NILO.TOLA',
        //     'password' => bcrypt('3419900'),
        //     'ci_empleado' => '3419900',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'RODOLFO.ROMERO',
        //     'password' => bcrypt('3443481'),
        //     'ci_empleado' => '3443481',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'GREGORIO.MOLLO',
        //     'password' => bcrypt('3884838'),
        //     'ci_empleado' => '3884838',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'BARTOLOME.TARQUI',
        //     'password' => bcrypt('4237115'),
        //     'ci_empleado' => '4237115',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'CRISPIN.RAMOS',
        //     'password' => bcrypt('4250955'),
        //     'ci_empleado' => '4250955',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'ALFREDO.RAMOS',
        //     'password' => bcrypt('4329223'),
        //     'ci_empleado' => '4329223',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'HEFFNER.VARGAS',
        //     'password' => bcrypt('4369324'),
        //     'ci_empleado' => '4369324',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'SEFERINO.APAZA',
        //     'password' => bcrypt('4742071'),
        //     'ci_empleado' => '4742071',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'FRANSISCO.TICONA',
        //     'password' => bcrypt('4978212'),
        //     'ci_empleado' => '4978212',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'SEBASTIAN.FLORES',
        //     'password' => bcrypt('4989109'),
        //     'ci_empleado' => '4989109',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'ANCELMO.MAMANI',
        //     'password' => bcrypt('5475279'),
        //     'ci_empleado' => '5475279',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'ELESIO.CHURA',
        //     'password' => bcrypt('5483466'),
        //     'ci_empleado' => '5483466',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]);
        // DB::table('users')->insert([
        //     'usuario' => 'RUBEN.PAREDES',
        //     'password' => bcrypt('6066059'),
        //     'ci_empleado' => '6066059',
        //     'estado' => '1',
        //     'id_rol'=> '0',
        // ]); 

    }
}

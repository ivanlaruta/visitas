<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SuperUsuarioTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(UbicacionesTableSeeder::class);
        $this->call(EmpleadosTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(MotivosTableSeeder::class);
        $this->call(visitantesTableSeeder::class);
        $this->call(TarjetasTableSeeder::class);
        $this->call(ParametricasTableSeeder::class);
        $this->call(VisitasTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

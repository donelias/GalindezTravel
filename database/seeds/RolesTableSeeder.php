<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert($data = array(
            [
                'name'=> 'Administrador',
                'slug'=> 'administrador',
                'description'=> 'Administrador cuenta con acceso total al sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Usuario',
                'slug'=> 'usuario',
                'description'=> 'Usuarios tales como Hoteles, Aerolineas, Proveedores, entre otros. Tendran acceso limitado al sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Cliente',
                'slug'=> 'cliente',
                'description'=> 'Clientes con funciones muy limitadas en el sistema',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

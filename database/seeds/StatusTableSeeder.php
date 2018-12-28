<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert($data = array(
            [
                'name'=> 'Activo(a)',
                'slug'=> 'activo(a)',
                'description'=> 'Estatus Activo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Inactivo(a)',
                'slug'=> 'inactivo(a)',
                'description'=> 'Estatus Inactivo',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Recibida',
                'slug'=> 'recibida',
                'description'=> 'Estatus Recibida',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Contestada',
                'slug'=> 'contestada',
                'description'=> 'Estatus Contestada',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

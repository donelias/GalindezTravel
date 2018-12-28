<?php

use Illuminate\Database\Seeder;

class TypeServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_services')->insert($data = array(
            [
                'name'=> 'Hotel de Cuidad',
                'slug'=> 'hotel-de-ciudad',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Hotel de Playa',
                'slug'=> 'hotel-de-playa',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Posada',
                'slug'=> 'posada',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Boutique',
                'slug'=> 'boutique',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

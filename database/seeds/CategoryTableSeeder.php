<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($data = array(
            [
                'category'=> 'Tours',
                'slug' => 'tours',
                'description' => 'Tours nacionales e internacionales.',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'category'=> 'Holetes',
                'slug' => 'hotels',
                'description' => 'Hoteles nacionales e internacionales.',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'category'=> 'Vuelos',
                'slug' => 'flight',
                'description' => 'Vuelos nacionales e internacionales.',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'category'=> 'Full Day',
                'slug' => 'full-day',
                'description' => 'Pasa dias nacionales e internacionales.',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

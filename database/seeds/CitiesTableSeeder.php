<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert($data = array(
            [
                'code'=> 'CCS',
                'city' => 'Caracas',
                'country_id' => '228',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'code'=> 'PMV',
                'city' => 'Porlamar',
                'country_id' => '228',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'code'=> 'VLN',
                'city' => 'Valencia',
                'country_id' => '228',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'code'=> 'MAR',
                'city' => 'Maracaibo',
                'country_id' => '228',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

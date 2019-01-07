<?php

use Illuminate\Database\Seeder;

class MoneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_currencies')->insert($data = array(
            [
                'money'=> 'BsS.',
                'slug' => 'bss',
                'description' => 'Bolivar Soberano',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'money'=> 'RD$',
                'slug' => 'rd$',
                'description' => 'Peso dominicano',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'money'=> 'US$',
                'slug' => 'us$',
                'description' => 'Dolar estadounidense',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

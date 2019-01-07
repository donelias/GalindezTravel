<?php

use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert($data = array(
            [
                'plan'=> 'Solo Desayunos',
                'slug'=> 'solo-desayuno',
                'description'=> 'Bebidas no alcohólicas,
                                Bebidas alcohólicas,
                                Toldos y sillas en la playa,
                                Toldos y sillas en la piscina,
                                Snacks,
                                Animacion,
                                Desayuno,
                                Alojamiento',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'plan'=> 'Todo Incluido',
                'slug'=> 'todo-incluido',
                'description'=> 'Desayuno tipo buffe,
                                Bebidas no alcohólicas,
                                Bebidas alcohólicas,
                                Toldos y sillas en la playa,
                                Toldos y sillas en la piscina,
                                Snacks,
                                Animacion,
                                Almuerzo tipo buffet,
                                Cena tipo buffet,
                                Alojamiento,
                                Bebidas en el hotel',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

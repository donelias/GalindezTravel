<?php

use Illuminate\Database\Seeder;

class CategoryServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_services')->insert($data = array(
            [
                'name'=> 'Una Estrella',
                'slug' => 'una_estrella',
                'description' => 'Categoria 1 Estrella',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Dos Estrellas',
                'slug' => 'dos_estrellas',
                'description' => 'Categoria 2 Estrellas',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Tres Estrellas',
                'slug' => 'tres_estrellas',
                'description' => 'Categoria 3 Estrellas',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Cuatro Estrellas',
                'slug' => 'cuatro_estrellas',
                'description' => 'Categoria 4 Estrellas',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Cinco Estrellas',
                'slug' => 'cinco_estrellas',
                'description' => 'Categoria 1 Estrellas',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Economico',
                'slug' => 'economico',
                'description' => 'Categoria economica',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name'=> 'Negocios',
                'slug' => 'negocios',
                'description' => 'Categoria negocios',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ])

        );
    }
}

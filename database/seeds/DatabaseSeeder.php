<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CategoryServicesTableSeeder::class);
        $this->call(MoneyTableSeeder::class);
        $this->call(PlanTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(TypeServicesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        */

        $this->call(PostsTableSeeder::class);
    }
}

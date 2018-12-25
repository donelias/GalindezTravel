<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hector Galindez',
            'username' => 'donelias',
            'email' => 'hectorgalindez02@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Elias Mercedes',
            'username' => 'elias02',
            'email' => 'elias@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);
        factory(User::class, 998)->create();
    }
}

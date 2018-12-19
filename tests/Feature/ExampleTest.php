<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       $user = factory(\App\User::class)->create([
           'name' => 'Hector Galindez',
           'email' => 'hectorgalindez02@gmail.com'
       ]);

        $response = $this->actingAs($user, 'api')
            ->get('/api/user');

        $response->assertSee($user->name)
            ->assertSee('hectorgalindez02@gmail.com');
    }
}

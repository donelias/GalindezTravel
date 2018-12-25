<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreatePostsTest extends DuskTestCase
{


    /**
     *
     */
    public function test_a_user_create_a_post()
    {

        // Having
        $title = 'Este es el Titulo';
        $content = 'Este es el contenido';
        $this->actingAs($user = $this->defaultUser());


        // When
        $this->post(route('posts.create'))
            ->assertSee($title, 'title')
            ->assertSee($content, 'content')
            ->assertSee('Publicar');


        // Then
       $response = $this->assertDatabaseMissing('posts', [
            'title' => $title,
            'content' => $content,
            'pending' => true,
            'user_id' => $user->id,
        ]);



        // Test a user is redirected to the posts details after creating it.
        //$response->asserSee($title);
    }



    public function test_creating_a_post_requires_authentication()
    {

        // When
        $this->get(route('posts.create'))
            ->assertRedirect(route('login'));

    }
}

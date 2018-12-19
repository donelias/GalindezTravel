<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/12/18
 * Time: 10:43 PM
 */

namespace Tests\Browser\Feature;


use Tests\TestCase;

class CreatePostsTest extends TestCase
{

    /**
     *
     */
    public function test_a_user_create_a_post()
    {

        // Having
        $title = 'Esta es una pregunta';
        $content = 'Este es el contenido';
        $this->actingAs($user = $this->defaultUser());


        // When
        $this->post(route('posts.create'))
            ->assertSee($title, 'title')
            ->assertSee($content, 'content');
            //->assert('Publicar');


        // Then
        $response = $this->assertDatabaseMissing('posts', [
            'title' => $title,
            'content' => $content,
            'pending' => true,
            'user_id' => $user->id,
        ]);



        // Test a user is redirected to the posts details after creating it.
        //$response->asserSee('Esta es una pregunta');
    }



    public function test_creating_a_post_requires_authentication()
    {

        // When
        $this->get(route('posts.create'))
            ->assertRedirect(route('login'));

    }




}
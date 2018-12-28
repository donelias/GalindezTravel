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
        //$response->assertSee($title);
    }



    public function test_creating_a_post_requires_authentication()
    {

        // When
        $this->get(route('posts.create'))
            ->assertRedirect(route('login'));

    }



    public function test_create_post_form_validation()
    {
        /*$this->actingAs($this->defaultUser())
            ->visit(route('posts.create'))
            ->press('Publicar')
            ->seePageIs(route('posts.create'))
            ->seeInElement('#field_title.has-error .help-block', 'El campo título es obligatorio')
            ->seeInElement('#field_content.has-error .help-block', 'El campo contenido es obligatorio');*/

        $this->browse(function ($browser) {
            $browser->visit(route('posts.create'))
                ->press('Publicar')
                ->assertPathIs(route('posts.create'));
        });
    }
}

<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreatePostsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }


    public function test_a_user_create_a_post()
    {
        // Having
        $title = 'Esta es una pregunta';
        $content = 'Este es el contenido';


        // When
        $this->browse(function (Browser $browser) use ($title, $content) {
            $browser->visit(route('posts.create'))
                ->type('title', $title)
                ->type('content', $content )
                ->press('Publicar');
                //->assertSee($title);
        });



        // Then


    }
}

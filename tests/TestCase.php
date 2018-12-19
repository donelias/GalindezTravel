<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $defaultUser;


    public function defaultUser()
    {

        //validar si el usuario existe
        if ($this->defaultUser){

            return $this->defaultUser;
        }

        return $this->defaultUser = factory(\App\User::class)->create();
    }
}

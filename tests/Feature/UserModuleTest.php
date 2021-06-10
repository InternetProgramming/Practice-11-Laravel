<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */

    function loadsUserListPage()
    {
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Users');
    }

    /** @test */
    function loadsUserDetailPage(){
        $this->get('/users/5')
            ->assertStatus(200)
            ->assertSee("User detail: 5");
    }

    /** @test */
    function loadsNewUserPage(){
        $this->get('/users/new')
            ->assertStatus(200)
            ->assertSee('Create a new user');
    }

}

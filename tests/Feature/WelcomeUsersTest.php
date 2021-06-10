<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    public function welcomeUserWithNickname()
    {
        $this->get('/welcome/Andrea/Andy')
            ->assertStatus(200)
            ->assertSee('Welcome Andrea, your nickname is Andy');
    }

    /** @test */
    public function welcomeUserWithoutNickname()
    {
        $this->get('/welcome/Andrea')
            ->assertStatus(200)
            ->assertSee('Welcome Andrea');
    }
}

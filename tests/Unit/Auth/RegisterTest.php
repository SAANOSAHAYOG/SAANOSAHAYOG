<?php

namespace Tests\Unit\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function register_displays_the_register_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
    }

    /** @test */

    public function user_cannot_view_a_register_form_when_authenticated()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/register');

        $response->assertRedirect('/home');
    }

    /** @test */

    public function user_can_register_with_valid_input()
    {
        $response = $this->from('/register')->post('/register', [
            'name' => 'nobody',
            'address' => 'nowhere',
            'phone' => '0000000000',
            'email' => 'nobody@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticated();
    }

    /** @test */

    public function user_cannot_register_with_invalid_email()
    {
        $response = $this->from('/register')->post('/register', [
            'name' => 'nobody',
            'address' => 'nowhere',
            'phone' => '0000000000',
            'email' => 'invalid-email',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertRedirect('/register');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /** @test */

    public function user_cannot_register_with_mismatched_password()
    {
        $response = $this->from('/register')->post('register', [
            'name' => 'nobody',
            'address' => 'nowhere',
            'phone' => '0000000000',
            'email' => 'nobody@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'invalid-password'
        ]);

        $response->assertRedirect('/register');
        $response->assertSessionHasErrors('password');
        $this->assertTrue(session()->hasOldInput('name'));
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

}

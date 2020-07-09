<?php

namespace Tests\Unit\Homepage;

use App\Model\Donate;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DonateView extends TestCase
{
    /** @test */

    public function Homepage_event_shows_event_list()
    {
        $response = $this->get('/donate');

        $response->assertStatus(200);
        $response->assertViewIs('saanosahayog.donate');
    }
    /** @test */

    public function user_can_donate_stuffs_with_valid_input()
    {
        $response = $this->post('/storedonate', [
            'name' => 'Nobody',
            'email' => 'nobody@gmail.com',
            'phone' => '9873773828',
            'address' => 'Maitighar',
            'city' => 'Kathmandu',
            'state' => '3',
            'zipcode' => 'Saano Sahayog',
            'donate' => 'Hamro Saano Sahayog',
            'image' => 'first.jpg',
        ]);

        $storedonate = Donate::first();
        $this->assertCount(1, Donate::all());
    }
}

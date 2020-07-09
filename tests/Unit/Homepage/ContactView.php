<?php

namespace Tests\Unit\Homepage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactView extends TestCase
{  /** @test */
    public function contact_displays_contact_details()
    {
        $response = $this->get('/contact-us');
        $response->assertStatus(200);
        $response->assertViewIs('saanosahayog.contact-us');
    }
}

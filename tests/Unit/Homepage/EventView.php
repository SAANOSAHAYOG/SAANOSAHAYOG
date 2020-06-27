<?php

namespace Tests\Unit\Homepage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventView extends TestCase
{
    
    /** @test */

    public function Homepage_event_shows_event_list()
    {
        $response = $this->get('/event');

        $response->assertStatus(200);
        $response->assertViewIs('saanosahayog.event');
    }

    
}

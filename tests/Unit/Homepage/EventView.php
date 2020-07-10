<?php

namespace Tests\Unit\Homepage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\Event;
use App\Model\Applyevent;

class EventView extends TestCase
{
    
    /** @test */

    public function Homepage_event_shows_event_list()
    {
        $response = $this->get('/event');

        $response->assertStatus(200);
        $response->assertViewIs('saanosahayog.event');
    }

    /** @test */

    public function join_event_shows_event_details()
    {
        $this->post('/storeevent', [
            'location' => 'Maitighar',
            'startdate' => '2020-12-10',
            'starttime' => '12:00:00',
            'enddate' => '2020-12-10',
            'endtime' => '4:00:00',
            'eventname' => 'Saano Prayas',
            'description' => 'Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);

        $event = Event::first();
        $this->assertCount(1, Event::all());

        $response = $this->get('/event-detail/' . $event->id);

    }
    
    /** @test */

    public function user_can_join_the_events()
    {
        $response = $this->post('/storeapplyevent', [
            'eventname' => 'Saano Prayas',
            'name' => 'Nobody',
            'email' => 'nobody@gmil.com',
            'phone' => '9898737383',
            'address' => 'Nowhere',
        ]);

        $applyevent = Applyevent::first();
        $this->assertCount(1, Applyevent::all());
    }

}
    

`
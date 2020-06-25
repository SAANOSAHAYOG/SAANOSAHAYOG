<?php

namespace Tests\Unit\Admin;

use \App\Model\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{

    use RefreshDatabase;

    /** @test */

    public function event_displays_the_events_list()
    {
        $response = $this->get('/event');

        $response->assertStatus(200);
        $response->assertViewIs('saanosahayog.event');
    }

    /** @test */

    public function admin_can_create_events_with_valid_input()
    {
        $response = $this->post('/storeevent', [
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

        $storeevent = Event::first();

        $this->assertCount(1, Event::all());

        $response->assertRedirect('/viewevent');
        // $response->assertRedirect('/storeevent/' . $storeevent->id);
    }

    /** @test */

    public function event_name_should_not_be_empty()
    {
        $response = $this->post('/storeevent', [
            'location' => 'Maitighar',
            'startdate' => '2020-12-10',
            'starttime' => '12:00:00',
            'enddate' => '2020-12-10',
            'endtime' => '4:00:00',
            'eventname' => '',
            'description' => 'Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);


        $response->assertSessionHasErrors('eventname');
    }

    /** @test */

    public function admin_can_update_events_with_valid_input()
    {
        $this->withExceptionHandling();

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
        $response = $this->post('/updateevent/' . $event->id, [
            'location' => 'Maitighar',
            'startdate' => '2020-12-10',
            'starttime' => '12:00:00',
            'enddate' => '2020-12-10',
            'endtime' => '4:00:00',
            'eventname' => 'Hamro Saano Prayas',
            'description' => 'Hamro Saano Sahayog',
            'image' => 'first.jpg',
            'status' => 1,
        ]);

        $this->assertEquals('Hamro Saano Prayas', Event::first()->eventname);
        $this->assertEquals('Hamro Saano Sahayog', Event::first()->description);
        $response->assertRedirect('/viewevent');
    }

    /** @test */

    public function admin_can_delete_event()
    {
        $this->withoutExceptionHandling();

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

        $response = $this->get('/deleteevent/' . $event->id);

        $this->assertCount(0, Event::all());
        $response->assertRedirect('/viewevent');
    }

}

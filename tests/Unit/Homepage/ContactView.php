<?php

namespace Tests\Unit\Homepage;
use App\Model\Contact;
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
  /** @test */
  public function guest_user_can_fill_contact_form_with_valid_input()
  {
      $response = $this->post('/storecontact', [
          'name' => 'nobody',
          'email' => 'nobody@gmail.com',
          'phone' => '9816467436',
          'message' => 'Saano Prayas',
      ]);
      $storecontact = Contact::first();
      $this->assertCount(1, Contact::all());
  }

}



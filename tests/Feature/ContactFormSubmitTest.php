<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactFormSubmitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_contact_form_page_exists()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);

    }
    public function test_cannot_submit_without_required_fields()
    {
        $response = $this->post('/contact', [
            'name' => 'John Doe',
            'email' => 'fakeemail@gmail.com',
            'message' => 'Hi, I am a message'
        ]);

        $response
        ->assertStatus(200)
        ->assertJson(['success' => 'Sent Successfully. We will reach out to you shortly.']);
    }
}

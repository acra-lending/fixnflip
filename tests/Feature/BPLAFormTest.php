<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BPLAFormTest extends TestCase
{
    public function test_bpla_form_route_exists()
    {
        $response = $this->get('apply');
        $response->assertStatus(200);
    }
}

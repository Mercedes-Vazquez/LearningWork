<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event; 

class GetEventsTest extends TestCase
{
    
    use RefreshDatabase; 

    public function tests()
    {
        $events= Event::factory(5)->create(); 

        $this->assertCount(5, $events); 

        $events= Event::all();

        $response = $this->get(route('comingEvents'))
            ->assertStatus(200)
            ->assertViewIs('comingEvents')
            ->assertViewHas('events', $events)
            ->assertSee($events[0] -> name);
    }
}

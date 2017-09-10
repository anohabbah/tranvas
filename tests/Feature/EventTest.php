<?php

namespace Tests\Feature;

use App\Modules\Event;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_see_events_list()
    {
        $event = factory(Event::class)->create();

        $this->get(route('events'))
            ->assertStatus(200)
            ->assertSeeText($event->title)
            ->assertSeeText($event->description);
    }
}

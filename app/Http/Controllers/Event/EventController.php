<?php

namespace App\Http\Controllers\Event;

use App\Modules\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->format('Y-m-d');

        $upcomingEvents = Event::where('ended_at', '>', $today)
            ->orderByDesc('started_at')->get();

        $pastEvents = Event::where('ended_at', '<', $today)
            ->orderByDesc('started_at')->limit(3)->get();

        return view('events.events-list')->withUpcomingEvents($upcomingEvents)->withPastEvents($pastEvents);
    }

    public function show(Event $event)
    {
        return view('events.show')->withEvent($event);
    }
}

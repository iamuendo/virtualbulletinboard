<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class RsvpEventsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = Event::with('bookings')->whereHas('bookings', function ($q) {
            $q->where('user_id', auth()->id());
        })->get();

        return view('events.rsvpEvents', compact('events'));
    }
}

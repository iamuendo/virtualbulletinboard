<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $event = Event::findOrFail($id);
        $booking = $event->bookings()->where('user_id', auth()->id())->first();
        $like = $event->likes()->where('user_id', auth()->id())->first();
        $bookmarkEvent = $event->bookmarkEvents()->where('user_id', auth()->id())->first();
        
        return view('events.details', compact('event', 'booking', 'like', 'bookmarkEvent'));
    }
}

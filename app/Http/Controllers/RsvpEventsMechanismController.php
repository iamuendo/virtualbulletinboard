<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class RsvpEventsMechanismController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $booking = $event->bookings()->where('user_id', auth()->id())->first();
        if (!is_null($booking)) {
            $booking->delete();
            return null;
        } else {
            $booking = $event->bookings()->create([
                'user_id' => auth()->id(),
                'available_slots' => 1
            ]);
            return $booking;
        }
    }
}

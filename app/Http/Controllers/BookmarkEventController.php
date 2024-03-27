<?php

namespace App\Http\Controllers;

use App\Models\Event;

class BookmarkEventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = Event::with('bookmarkEvents')->whereHas('bookmarkEvents', function ($q) {
            $q->where('user_id', auth()->id());
        })->get();

        return view('events.bookmarkEvents', compact('events'));
    }
}

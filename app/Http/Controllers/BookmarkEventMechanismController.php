<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class BookmarkEventMechanismController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $event = Event::findOrFail($id);
        $bookmarkEvent = $event->bookmarkEvents()->where('user_id', auth()->id())->first();
        if (!is_null($bookmarkEvent)) {
            $bookmarkEvent->delete();
            return null;
        } else {
            $bookmarkEvent = $event->bookmarkEvents()->create([
                'user_id' => auth()->id()
            ]);
            return $bookmarkEvent;
        }
    }
}

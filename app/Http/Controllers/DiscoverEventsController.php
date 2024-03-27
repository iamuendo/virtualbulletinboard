<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class DiscoverEventsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $events = Event::with('category', 'tags')->orderBy('created_at', 'desc')->paginate(12);
        return view('discover', compact('events'));
    }
}

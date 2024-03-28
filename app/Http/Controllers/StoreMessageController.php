<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class StoreMessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->messages()->create([
            'message' => $request->message,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\EventForum;
use Illuminate\Http\Request;

class DeleteMessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id, EventForum $message)
    {
        $this->authorize('delete', $message);
        $message->delete();

        return back();
    }
}

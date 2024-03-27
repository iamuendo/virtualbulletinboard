<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\EventCategory;
use App\Models\EventMode;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $events = Event::with('category')->get();
        return view('events.index', compact('events'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create() :View
    {
        $categories = EventCategory::all();
        $modes = EventMode::all();
        $tags = Tag::all();
        return view('events.create', compact('categories', 'modes', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEventRequest $request)
    {
        if ($request->hasFile('poster')) {

            $data = $request->validated();
            $data['poster'] = Storage::putFile('events', $request->file('poster'));
            $data['user_id'] = auth()->id();
            $data['slug'] = Str::slug($request->title);

            $event = Event::create($data);
            $event->tags()->attach($request->tags);
            return to_route('events.index');
        } else {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event): View
    {
        $categories = EventCategory::all();
        $modes = EventMode::all();
        $tags = Tag::all();
        return view('events.edit', compact('categories', 'modes', 'tags', 'event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('poster')) {
            Storage::delete($event->poster);
            $data['poster'] = Storage::putFile('events', $request->file('poster'));
        }

        $data['slug'] = Str::slug($request->title);
        $event->update($data);
        $event->tags()->sync($request->tags);
        return to_route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event): RedirectResponse
    {
        Storage::delete($event->poster);
        $event->tags()->detach();
        $event->delete();
        return to_route('events.index');
    }
}

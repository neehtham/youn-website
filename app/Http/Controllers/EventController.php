<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EventController extends Controller
{
    public function create()
    {
        return Inertia::render('create');
    }
    public function index()
    {
        $events = Event::get(['id', 'coverPhoto']);
        return inertia::render('programes', ['events' => $events]);
    }
    public function show(Event $event)
    {
        return inertia::render('program', ['event' => $event]);
    }
    public function view()
    {
        $events = Event::get();
        return inertia::render('programes.view', ['events' => $events]);
    }
    public function edit(Event $event)
    {
        return inertia::render('program.edit', ['event' => $event]);
    }
    public function destroy(Event $event)
    {
        // $event->delete();
        return Redirect::route('dashboard')->with('success', 'The event Has been deleted');
    }
}

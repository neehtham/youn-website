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
        return Inertia::render('portal/create');
    }
    public function index()
    {
        $events = Event::get(['id', 'slug', 'title', 'coverPhoto']);
        return inertia::render('web/programes', ['events' => $events]);
    }
    public function show(Event $event)
    {
        return inertia::render('web/program', ['event' => $event]);
    }
    public function view()
    {
        $events = Event::get();
        return inertia::render('portal/programes.view', ['events' => $events]);
    }
    public function edit(Event $event)
    {
        return inertia::render('portal/program.edit', ['event' => $event]);
    }
    public function destroy(Event $event)
    {
        $event->delete();
        return Redirect::route('dashboard')->with('success', 'The event Has been deleted');
    }
}

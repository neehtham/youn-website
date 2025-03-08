<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    //
    public function events(){
        $events = Event::latest()->get();
        return view('events.events', compact('events'));
    }

    public function event($id){
        $event = Event::findOrFail($id);
        return view('events.event', compact('event'));
    }

    public function sore_event(Request $request){
        dd($request);
    }
}

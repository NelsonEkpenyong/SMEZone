<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Http\Request;
use App\Services\EventService;
use App\Models\Event;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function add_event(AddEventRequest $request){
     EventService::addEvent($request);
    }

    public function change_event(UpdateEventRequest $request, $event){
     EventService::updateEvent($request,$event);
    }

    public function postpone_event(Request $request, $event ){
     return EventService::postponeEvent($request, $event);
   }

   public function delete_event($event ){
    return EventService::deleteEvent($event);
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\assets\Utility;
use App\Models\EventRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventEmail;




class EventsController extends Controller
{
    public function events(){
        $events = Event::latest()->get();
        return view('events.events', compact('events'));
    }

    public function event($id){
        $event = Event::findOrFail($id);
        $user  = Auth::user();
        if($user->last_activity){
            Utility::recordLicense('visited an event',$user);
        }
        return view('events.event', compact('event','user'));
    }

    public function sore_event(Request $request){
      try{  

        if (User::where('email', $request->email)->exists()) {

            $check = EventRegistration::where(['user_id' => $this->id(), 'event_id' => $request->event_id])->exists();

            if ($check) {
              return redirect()->back()->with('warning', 'You have already registered for this event.😞');
            }

            $user = User::where("email", $request->email)->first()->id;
            $registration             = new EventRegistration;
            $registration->user_id    = $user;
            $registration->venue_name = $request->venue_name;
            $registration->event_id   = $request->event_id;
            $registration->save(); 

            $event = Event::findOrFail($request->event_id);

            Mail::to($this->email())->send(new EventEmail(  
                      $this->user(),         $event->event_name,
                      $event->start_date,    $event->end_date,
                      $event->start_time,    $event->end_time,
                      $event->venue_address, $event->description,
                    ));
            
            return redirect("/events")->with('success','Event registration was successful');
        } else {
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name  = $request->last_name;
            $user->email      = $request->email;
            $user->gender_id  = $request->gender_id;
            $user->role_id    = $request->role_id;
            $user->password   = Hash::make($request->password);
            $user->save();

            $registration = [
                'user_id'    => $user->id,
                'venue_name' => $request->venue_name,
                'event_id'   => $request->event_id
            ];

            DB::table('event_registration')->insert($registration);

            return redirect("/an-event/$request->event_id")->with('success','Event registration was successful');
        }
      }catch (\Exception $e) {
        report($e);
        report($e->getMessage());
        return redirect("/an-event/$request->event_id")->with('error','Event registration wasn\'t successful')->withInput();
      } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
      }
    }
}

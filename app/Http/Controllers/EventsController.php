<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventRegistration;
use App\Models\User;



class EventsController extends Controller
{
    public function events(){
        $events = Event::latest()->get();
        return view('events.events', compact('events'));
    }

    public function event($id){
        $event = Event::findOrFail($id);
        return view('events.event', compact('event'));
    }

    public function sore_event(Request $request){
      try{  

        if (User::where('email', $request->email)->exists()) {
            // dd($request);
            $user = User::where("email", $request->email)->first()->id;
            // dd($user,$request->venue_name, $request->event_id);
            $registration             = new EventRegistration;
            $registration->user_id    = $user;
            $registration->venue_name = $request->venue_name;
            $registration->event_id   = $request->event_id;
            $registration->save(); 
            // dd($user,$request->venue_name,$request->event_id);
            // $registration = EventRegistration::create([
            //     'user_id'    => $user,
            //     'venue_name' => $request->venue_name,
            //     'event_id'   => $request->event_id,
            // ]);

            return redirect("/an-event/$request->event_id")->with('success','Event registration was successful');
        } else {
            $user = new User;
            $user->first_name = $request->first_name;
            $user->last_name  = $request->last_name;
            $user->email      = $request->email;
            $user->gender_id  = $request->gender_id;
            $user->role_id    = $request->role_id;
            $user->password   = $request->password;
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

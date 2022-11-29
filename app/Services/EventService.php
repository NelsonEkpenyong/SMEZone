<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Event;
use App\Interfaces\StoreObjectInterface;
use App\Utility\ResponseMessage;

class EventService {

  public static function addEvent($request){
    try{
      $event = new Event;
      $event->event_name            = $request->event_name;
      $event->venue_name            = $request->venue_name;
      $event->expected_participants = $request->expected_participants;
      $event->venue_address         = $request->venue_address;
      $event->event_type_id         = $request->event_type_id;
      $event->event_link            = $request->event_link;
      $event->start_date            = $request->start_date;
      $event->end_date              = $request->end_date;
      $event->start_time            = $request->start_time;
      $event->end_time              = $request->end_time;
      $event->description           = $request->description;
      $event->invite_user           = $request->invite_user;
 

      if ($request->hasFile('event_image')) {
          $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('event_image');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

          $event->event_image = $file_name;
      }
      
      if ($request->hasFile('thumbnail')) {
          $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('thumbnail');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

          $event->thumbnail = $file_name;
      }
      
      if ($request->hasFile('invitation_email_banner')) {
          $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('invitation_email_banner');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

          $event->invitation_email_banner = $file_name;
      }

      $event->save();
      
      return response()->json(['status'  => true,'message' => 'Event created succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }

  public static function updateEvent($request,$event){
    try{
      $event = Event::findOrFail($event);
      $event->event_name            = $request->event_name;
      $event->venue_name            = $request->venue_name;
      $event->expected_participants = $request->expected_participants;
      $event->venue_address         = $request->venue_address;
      $event->event_type_id         = $request->event_type_id;
      $event->event_link            = $request->event_link;
      $event->start_date            = $request->start_date;
      $event->end_date              = $request->end_date;
      $event->start_time            = $request->start_time;
      $event->end_time              = $request->end_time;
      $event->description           = $request->description;
      $event->invite_user           = $request->invite_user;
 

      if ($request->hasFile('event_image')) {
          $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('event_image');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

          $event->event_image = $file_name;
      }
      
      if ($request->hasFile('thumbnail')) {
          $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('thumbnail');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

          $event->thumbnail = $file_name;
      }
      
      if ($request->hasFile('invitation_email_banner')) {
          $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('invitation_email_banner');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

          $event->invitation_email_banner = $file_name;
      }

      $event->save();
      
      return response()->json(['status'  => true,'message' => 'Event updated succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }

  public static function postponeEvent($request, $id){
    try{
        $event = Event::findOrFail($id);
 
        $event->start_date = $request->start_date;
        $event->end_date   = $request->end_date;
        
        $event->save();
        return response()->json(['status'  => true,'message' => 'Event postponed succesfully'],200);

    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }
}
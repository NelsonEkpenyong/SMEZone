<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\LandingMedia;
use App\Interfaces\StoreObjectInterface;

class LandingService {

  public static function addHeroSlider($request){
    try{
      $media = new LandingMedia;

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

          $media->media_image = $file_name;
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

          $media->thumbnail = $file_name;
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

          $media->invitation_email_banner = $file_name;
      }

      $media->save();
      
      return response()->json(['status'  => true,'message' => 'media created succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }

  public static function addmedia($request){
   try{
     $media = new LandingMedia;

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


}
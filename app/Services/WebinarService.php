<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\WebinarRecordings as web;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\DataTransferObject\WebinarDTO;

class WebinarService
{
  public static function addWebinarRecording(WebinarDTO $webinarDTO): WebinarDTO
  {
    try {
      $webinars                    = new web;
      $webinars->webinar_name      = $webinarDTO->webinar_name;
      $webinars->webinar_link      = $webinarDTO->webinar_link;

      if (request()->hasFile('webinar_thumbnail')) {

        $image             = request()->file('webinar_thumbnail');
        $temporaryFilePath = $image->getPathname();
        $image_info        = getimagesize( $temporaryFilePath);

        $image_width  = $image_info[0];
        $image_height = $image_info[1];

        if ($image_width > 601 && !$image_height > 260) {
            return redirect()->back()->with('error', 'Webinar thumbnail must not be greater than 601 in width and 260 in height.');
        }
        $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

        $extension = $image->getClientOriginalExtension();
        $check = in_array($extension, $allowedfileExtension);

        if($check){
            $file_name = Str::random(4) . '.' . $extension;
            $image->move(public_path('images'), $file_name);
        }else{
            return redirect()->back()->with('error', 'File type not supported');
            
        }

        $webinars->webinar_thumbnail = $file_name;
      }
      
      $webinars->save();

      return $webinarDTO;

    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());

    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }


  public static function updateWebinarRecording(WebinarDTO $webinarDTO, $id): WebinarDTO
  {
    try {
      $webinars          = web::findOrFail($id);
      $webinars->webinar_name      = $webinarDTO->webinar_name;
      $webinars->webinar_link      = $webinarDTO->webinar_link;
      if (request()->hasFile('webinar_thumbnail')) {

       $image             = request()->file('webinar_thumbnail');
       $temporaryFilePath = $image->getPathname();
       $image_info        = getimagesize( $temporaryFilePath);

       $image_width  = $image_info[0];
       $image_height = $image_info[1];

       if ($image_width !== 601 && !$image_height !== 260) {
           return redirect()->back()->with('error', 'Webinar thumbnail must be 601 X 260 in dimension.');
       }
       $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

       $extension = $image->getClientOriginalExtension();
       $check = in_array($extension, $allowedfileExtension);

       if($check){
           $file_name = Str::random(4) . '.' . $extension;
           $image->move(public_path('images'), $file_name);
       }else{
           return redirect()->back()->with('error', 'File type not supported');
       }

       $old_photo = $webinars->webinar_thumbnail;

       if($old_photo){
           unlink(public_path('images/') . $old_photo);
           $webinars->webinar_thumbnail = $file_name;
       }else{
        $webinars->webinar_thumbnail = $file_name;
       }
     }
      
      $webinars->save();

      return $webinarDTO;

    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());
    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }


  public static function deleteWebinarRecording($id)
  {
    try {
     $webinars = web::findOrFail($id);
     $webinars->delete();

      return response()->json(['status'  => true, 'message' => 'Webinar recording deleted succesfully'], 200);
    } catch (\Exception $e) {
      report($e);
      report($e->getMessage());
    } catch (\Throwable $e) {
      report($e->getMessage());
      return back()->withError($e->getMessage())->withInput();
    }
  }
}

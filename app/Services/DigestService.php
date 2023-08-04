<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\RadioDigest as Rd;
use Illuminate\Http\Request;
use App\DataTransferObject\DigestDTO;


/**
 * Add a radio digest recording/podcast
 *
 * @param  DigestDTO  $digestDTO
 * @return \App\DataTransferObject\DigestDTO|\Illuminate\Http\RedirectResponse
 */
class DigestService
{
 public static function addRadioDigest(DigestDTO $digestDTO)
 {
  try {
   $digest = new Rd;
   $digest->digest_name = $digestDTO->digest_name;
   $digest->digest_link = $digestDTO->digest_link;

   if (request()->hasFile('digest_thumbnail')) {

    $image = request()->file('digest_thumbnail');
    $temporaryFilePath = $image->getPathname();
    $image_info        = getimagesize($temporaryFilePath);

    $image_width       = $image_info[0];
    $image_height      = $image_info[1];

    if ($image_width > 601 && !$image_height > 260) {
     return redirect()->back()->with('error', 'Radio Digest thumbnail must not be greater than 601 in width and 260 in height.');
    }
    $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];

    $extension = $image->getClientOriginalExtension();
    $check     = in_array($extension, $allowedfileExtension);

    if ($check) {
     $file_name = Str::random(4) . '.' . $extension;
     $image->move(public_path('images'), $file_name);
    } else {
     return redirect()->back()->with('error', 'File type not supported');

    }

    $digest->digest_thumbnail = $file_name;
   }

   $digest->save();

   return $digestDTO;

  } catch (\Exception $e) {
   report($e);
   report($e->getMessage());

  } catch (\Throwable $e) {
   report($e->getMessage());
   return back()->withError($e->getMessage())->withInput();
  }
 }


 /**
  * Add a radio digest recording/podcast
  *
  * @param  DigestDTO  $digestDTO
  * @param  int  $id
  * @return \App\DataTransferObject\DigestDTO|\Illuminate\Http\RedirectResponse
  */
 public static function updateRadioDigest(DigestDTO $digestDTO, $id)
 {
  try {
   $digest = Rd::findOrFail($id);
   $digest->digest_name = $digestDTO->digest_name;
   $digest->digest_link = $digestDTO->digest_link;
   if (request()->hasFile('digest_thumbnail')) {

    $image = request()->file('digest_thumbnail');
    $temporaryFilePath = $image->getPathname();
    $image_info = getimagesize($temporaryFilePath);

    $image_width  = $image_info[0];
    $image_height = $image_info[1];

    if ($image_width !== 601 && !$image_height !== 260) {
     return redirect()->back()->with('error', 'Webinar thumbnail must be 601 X 260 in dimension.');
    }
    $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];

    $extension = $image->getClientOriginalExtension();
    $check     = in_array($extension, $allowedfileExtension);

    if ($check) {
     $file_name = Str::random(4) . '.' . $extension;
     $image->move(public_path('images'), $file_name);
    } else {
     return redirect()->back()->with('error', 'File type not supported');
    }

    $old_photo = $digest->digest_thumbnail;

    if ($old_photo) {
     unlink(public_path('images/') . $old_photo);
     $digest->digest_thumbnail = $file_name;
    } else {
     $digest->digest_thumbnail = $file_name;
    }
   }

   $digest->save();

   return $digestDTO;

  } catch (\Exception $e) {
   report($e);
   report($e->getMessage());
  } catch (\Throwable $e) {
   report($e->getMessage());
   return back()->withError($e->getMessage())->withInput();
  }
 }


 public static function deleteRadioDigest($id)
 {
  try {
   $digest = Rd::findOrFail($id);
   $digest->delete();

   return response()->json(['status' => true, 'message' => 'Radio digest deleted succesfully'], 200);
  } catch (\Exception $e) {
   report($e);
   report($e->getMessage());
  } catch (\Throwable $e) {
   report($e->getMessage());
   return back()->withError($e->getMessage())->withInput();
  }
 }
}
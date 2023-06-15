<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseService {

  public static function addCourse($request){
    try{
      $course = new Course;
      $course->type_id            = $request->type_id;
      $course->name               = $request->name;
      $course->embed_link         = $request->embed_link;
      $course->certificate_id     = $request->certificate_id;
      $course->course_category_id = $request->course_category_id;
      $course->payment_type_id    = $request->payment_type_id;
      $course->synopsis           = $request->synopsis;
      $course->description        = $request->description;
 

      if ($request->hasFile('image')) {
          $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('image');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

          $course->image = $file_name;
      }
      
      $course->save();
      
      return response()->json(['status'  => true,'message' => 'Course created succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }


  public static function updateCourse($request, $id){
    try{
      $course = Course::findOrFail($id);

      $course->type_id            = $request->type_id;
      $course->name               = $request->name;
      $course->embed_link         = $request->embed_link;
      $course->certificate_id     = $request->certificate_id;
      $course->course_category_id = $request->course_category_id;
      $course->payment_type_id    = $request->payment_type_id;
      $course->synopsis           = $request->synopsis;
      $course->description        = $request->description;


      if ($request->hasFile('image')) {
          $allowedfileExtensions = ['pdf','jpg','png','docx','jpeg','gif','svg'];
          $image = $request->file('image');

          $extension = $image->getClientOriginalExtension();
          $check = in_array($extension, $allowedfileExtensions);
          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
              return redirect()->back()->with('error', 'File type not supported');
          }

        $old_photo = $course->image;

        if($old_photo){
            // unlink(storage_path('app/public/images/' . $picture));
            unlink(public_path('images/') . $old_photo);
            $course->image = $file_name;
        }else{
          $course->image = $course->image;
        }
      }
    
      $course->save();
      
      return response()->json(['status'  => true,'message' => 'Course updated succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }

  public static function featureCourse($id){
    try{
      $course = Course::findOrFail($id);

      if($course->is_featured == 0){
          Course::where('id',$id)->update(['is_featured' =>  1]);
      }

      if($course->is_featured == 1){
        Course::where('id',$id)->update(['is_featured' =>  0]);
      }

      return response()->json(['status'  => true,'message' => 'Course status updated succesfully'],200);
      
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }


}
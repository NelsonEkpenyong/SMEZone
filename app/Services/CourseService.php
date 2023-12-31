<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseService {

  public static function addCourse($request){
    try{
      $course                     = new Course;
      $course->type_id            = $request->type_id;
      $course->name               = $request->name;
      $course->embed_link         = $request->embed_link;
      $course->certificate_id     = $request->certificate_id;
      $course->course_category_id = $request->course_category_id;
      $course->synopsis           = $request->synopsis;
      $course->description        = $request->description;

      if ($request->hasFile('image')) {
          $allowedfileExtension = ['jpg','png','docx','jpeg','gif','svg'];

          $image = $request->file('image');

          $extension = $image->getClientOriginalExtension();
          $check     = in_array($extension, $allowedfileExtension);

          if($check){
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);
          }else{
               return redirect()->back()->with('error', 'The file type must either be jpg, png, docx, jpeg, gif or svg.');
          }

          $course->image = $file_name;
      }

      if ($request->hasFile('pdf')) {
          $pdfExtension = ['pdf'];
          
          $pdf       = $request->file('pdf');
          $extension = $pdf->getClientOriginalExtension();
          $check     = in_array($extension, $pdfExtension);

          if(!$check){
            return redirect('/course')->with('error', 'The file type must be pdf.');
          }

          $fileName = $pdf->getClientOriginalName();
          $pdf->move(public_path('pdf'), $fileName);
          $course->pdf = $fileName; 
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
    try {
      $course = Course::findOrFail($id);

      $courseData = [
          'type_id' => $request->type_id,
          'name' => $request->name,
          'embed_link' => $request->embed_link,
          'certificate_id' => $request->certificate_id,
          'course_category_id' => $request->course_category_id,
          'synopsis' => $request->synopsis,
          'description' => $request->description,
          'content' => $request->content,
      ];

      if ($request->hasFile('image')) {
          $allowedfileExtensions = ['pdf', 'jpg', 'png', 'docx', 'jpeg', 'gif', 'svg'];
          $image = $request->file('image');
          $extension = $image->getClientOriginalExtension();

          if (in_array($extension, $allowedfileExtensions)) {
              $file_name = Str::random(4) . '.' . $extension;
              $image->move(public_path('images'), $file_name);

              $old_photo = $course->image;

              if ($old_photo) {
                  unlink(public_path('images/') . $old_photo);
              }

              $courseData['image'] = $file_name;
          } else {
              return redirect()->back()->with('error', 'File type not supported');
          }
      }

      $course->update($courseData);

      return response()->json(['status' => true, 'message' => 'Course updated successfully'], 200);
  } catch (\Exception $e) {
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

  public static function deleteCourse($course){
    try{
        Course::find($course)->delete();
        
        return response()->json(['status'  => true,'message' => 'Course deleted succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
}


}
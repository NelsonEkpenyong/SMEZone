<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\CourseCategories;
use Illuminate\Http\Request;

class CourseCategoryService {

  public static function addCourseCategory($request){
    try{
      $course_category = new CourseCategories;

      $course_category->title        = $request->title;
      $course_category->description  = $request->description;
      $course_category->save();
      
      return response()->json(['status'  => true,'message' => 'Course category created succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }


  public static function updateCourseCategory($request, $category){
    try{
      $course_category = CourseCategories::findOrFail($category);

      $course_category->title        = $request->title;
      $course_category->description  = $request->description;
      $course_category->save();
      
      return response()->json(['status'  => true,'message' => 'Course category updated succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }


}
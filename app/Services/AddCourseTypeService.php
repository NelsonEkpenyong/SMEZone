<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\CourseType;
use App\Interfaces\StoreObjectInterface;
use App\Utility\ResponseMessage;

class AddCourseTypeService{

  public static function addCourseType($request){
    try{
      $courseType = new CourseType;
      $courseType->name  = $request->name;
      $courseType->save();
      
      return response()->json(['status'  => true,'message' => 'CourseType created succesfully'],200);
    }catch (\Exception$e) {
        report($e);
        report($e->getMessage());
    } catch (\Throwable $e) {
        report($e->getMessage());
        return back()->withError($e->getMessage())->withInput();
    }
  }



}
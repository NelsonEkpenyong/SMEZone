<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;
use App\Services\CourseService;
use App\Models\Course;
use Illuminate\Support\Str;

class CourseController extends Controller
{
 
    public function store_course(AddCourseRequest $request){
        CourseService::addCourse($request);
    }

    public function modify_course(UpdateCourseRequest $request, $course){
        CourseService::updateCourse($request,$course);
    }

    public function feature_course($course){
        CourseService::featureCourse($course);
    }
}

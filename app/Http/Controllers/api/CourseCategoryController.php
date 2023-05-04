<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseCategoryRequest;
use App\Services\CourseCategoryService;
use App\Models\CourseCategories;
use Illuminate\Support\Str;

class CourseCategoryController extends Controller
{
 
    public function store_course_category(CourseCategoryRequest $request){
      CourseCategoryService::addCourseCategory($request);
    }

    public function modify_course_category(CourseCategoryRequest $request, $category){
     CourseCategoryService::updateCourseCategory($request,$category);
    }

}

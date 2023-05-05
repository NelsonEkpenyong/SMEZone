<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategories;
use App\assets\Utility;
class CoursesController extends Controller
{
    public function courses(){
        
        $courseCategoryId = Course::distinct()->pluck('course_category_id');
        $categories = CourseCategories::whereIn('id', $courseCategoryId)->get();
        $courses = Course::all();
        
        return view('courses.courses', compact('courses', 'categories'));
    }

    public function courses_by_category($category){
        $courseCategoryId  = Course::distinct()->pluck('course_category_id');
        $categories        = CourseCategories::whereIn('id', $courseCategoryId)->get();

        $coursesByCategory = CourseCategories::find($category)->courses;
        // dd($coursesByCategory[0]->courseCategory->title);
        return view('courses.coursesByCategory', compact('categories','coursesByCategory'));
    }

    public function course($id){
        $course = Course::findOrFail($id);
        return view('courses.course',compact('course'));
    }
}

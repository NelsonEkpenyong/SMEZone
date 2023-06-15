<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategories;
use App\assets\Utility;
use App\Models\Enrollments;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function courses(){

        $courseCategoryId = Course::distinct()->pluck('course_category_id');
        $categories = CourseCategories::whereIn('id', $courseCategoryId)->get();
        $courses = Course::all();

        return view('courses.courses', compact('courses', 'categories'));
    }

    public function courses_by_category(int $category){
        $courseCategoryId  = Course::distinct()->pluck('course_category_id');
        $categories        = CourseCategories::whereIn('id', $courseCategoryId)->get();
        $coursesByCategory = CourseCategories::find($category)->courses;
        return view('courses.coursesByCategory', compact('categories', 'coursesByCategory'));
    }

    public function course(int $id){
        $courseCategoryId  = Course::distinct()->pluck('course_category_id');
        $categories        = CourseCategories::whereIn('id', $courseCategoryId)->get();
        $course            = Course::findOrFail($id);
        $categoryId = $course->course_category_id;
        $category   = CourseCategories::findOrFail($categoryId);
        $user_has_course = Enrollments::where(['user_id' => Auth::user()->id ?? '', 'course_id' => $course->id])->limit(1)->count();
        return view('courses.course', compact(['course', 'user_has_course','category','categories']));
    }
}

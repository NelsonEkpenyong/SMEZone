<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\api\AdminController;
use App\Http\Controllers\api\CourseController;
use App\Http\Controllers\api\CourseCategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/admin/process-login',[AdminController::class,'handleLogin'])->name('/admin/process-login');



Route::controller(AdminController::class)->prefix('admin')->group( function(){
    Route::post('/add-event','add_event')->name('add-event');
    Route::post('/change-event/{event}','change_event')->name('change-event');
    Route::post('/postpone-an-event/{event}','postpone_event')->name('postpone-an-event');
    Route::get('/deleteEvent/{event}','delete_event')->name('deleteEvent');

    Route::post('/add-industry','add_industry')->name('add-industry');
    Route::post('/add-course-type','add_course_type')->name('add-course-type');
});


Route::controller(CourseController::class)->prefix('course')->group( function(){
    Route::post('/store-course','store_course')->name('store-course');
    Route::post('/modify-course/{course}','modify_course')->name('modify-course');
    Route::get('/feature-course/{course}','feature_course')->name('feature-course');
});

Route::controller(CourseCategoryController::class)->prefix('courseCategory')->group( function(){
    Route::post('/store-course-category','store_course_category')->name('store-course-category');
    Route::post('/modify-course-category/{category}','modify_course_category')->name('modify-course-category');
});

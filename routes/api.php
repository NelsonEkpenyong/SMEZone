<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\api\AdminController;
use App\Http\Controllers\api\CourseController;
use App\Http\Controllers\api\LocationController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\WebinarController;
use App\Http\Controllers\api\CourseCategoryController;
use App\Http\Controllers\api\NewsController;
use App\Http\Controllers\api\PartnerController;
use App\Http\Controllers\api\OpportunityController;



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

Route::get('/lga/{state}', [LocationController::class,'lgaBySate']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/admin/process-login',[AdminController::class,'handleLogin'])->name('/admin/process-login');



Route::controller(AdminController::class)->prefix('admin')->group( function(){
    Route::post('/add-event','add_event')->name('add-event');
    Route::post('/change-event/{event}','change_event')->name('change-event');
    Route::post('/postpone-an-event/{event}','postpone_event')->name('postpone-an-event');
    Route::get('/deleteEvent/{event}','delete_event')->name('deleteEvent');

    Route::get('/deletePost/{post}','delete_post')->name('deletePost');

    Route::post('/add-industry','add_industry')->name('add-industry');
    Route::post('/add-course-type','add_course_type')->name('add-course-type');
    
});

Route::controller(NewsController::class)->prefix('news')->group( function(){
    Route::post('/addNews','add_news')->name('addNews');
});

Route::controller(WebinarController::class)->prefix('webinarRecs')->group( function(){
    Route::post('/add-recording','add_recording')->name('add-recording');
});

Route::controller(OpportunityController::class)->prefix('opportunity')->group( function(){
    Route::post('/addOpportunity','save_opportunity')->name('addOpportunity');
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


Route::controller(PostController::class)->prefix('post')->group( function(){
    Route::post('/post','store_post')->name('post');
    Route::post('/comment/{id}','store_comment')->name('comment');
    Route::post('/likes/{post_id}/{comment_id}','likes')->name('likes');
});

Route::controller(PartnerController::class)->prefix('partner')->group( function(){
    Route::post('/getFunded','get_funded')->name('getFunded');
});


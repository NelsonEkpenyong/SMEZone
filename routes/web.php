<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrolmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('admin',[AdminAuthController::class,'login'])->name('/admin');
Route::post('/admin/logout',[AdminAuthController::class,'logout'])->name('/admin/logout');

Route::post('/admin/handle-login',[AdminAuthController::class,'handleLogin'])->name('/admin/handle-login');

Route::controller(AdminController::class)->middleware(['adminAuth'])->group( function(){
    Route::get('/dashboard','admin_dashboard')->name('dashboard');

    Route::get('/event','event')->name('event');
    Route::post('/store-event','store_event')->name('store-event');
    Route::get('/manage','manage_event')->name('manage');

    Route::get('/edit-event/{event}','edit_event')->name('edit-event');
    Route::post('/update-event/{event}','update_event')->name('update-event');

    Route::get('/analyse-event/{event}','analyse_event')->name('analyse-event');
    Route::get('/feature-event/{event}','feature_event')->name('feature-event');
    Route::get('/upcome-event/{event}','upcome_event')->name('upcome-event');
    Route::get('/cancel-event/{event}','cancel_event')->name('cancel-event');

    Route::get('/postpone-event/{event}','postpone_event')->name('postpone-event');
    Route::post('/postpone/{event}','postpone')->name('postpone');

    Route::get('/industry','industry')->name('industry');
    Route::post('/store-industry','store_industry')->name('store-industry');
    Route::get('/manage-industry','manage_industry')->name('manage-industry');

    Route::get('/edit-industry/{industry}','edit_industry')->name('edit-industry');
    Route::post('/update-industry/{industry}','update_industry')->name('update-industry');

    Route::get('/delete-industry/{industry}','delete_industry')->name('delete-industry');

    Route::get('/course-categories','course_categories')->name('course-categories');
    Route::get('/add-category','add_category')->name('add-category');
    Route::post('/add-course-category','add_course_category')->name('add-course_category');
    Route::get('/edit-course-category/{category}','edit_course_category')->name('edit-course-category');
    Route::post('/update-course-category/{category}','update_course_category')->name('update-course-category');

    Route::get('/manage-course','manage_course')->name('manage-course');
    Route::get('/course','course')->name('course');
    Route::post('/add-course','add_course')->name('add-course');
    Route::get('/edit-course/{course}','edit_course')->name('edit-course');
    Route::post('/update-course/{course}','update_course')->name('update-course');
    

    Route::get('/manage-mail', 'manage_mail')->name('manage-mail');
    Route::get('/mail', 'mail')->name('mail');
    Route::post('/send-mail', 'send_mail')->name('send_mail');

    Route::get('/sliders', 'sliders')->name('sliders');
    Route::get('/change-hero-slider/{id}', 'change_hero_slider')->name('create-hero-slider');
    Route::post('/slider/{id}', 'update_hero_slider')->name('slider');

    Route::get('/create-video-slider', 'create_video_slider')->name('create-video-slider');
    Route::post('/update-video-slider/{id}', 'update_video_slider')->name('update-video-slider');

    Route::get('/featuredImage', 'featured_image')->name('featuredImage');
    Route::get('/featured-image', 'create_featured_image')->name('featured-image');
    Route::get('/create-featured-image', 'create_featured_image')->name('create-featured-image');
    Route::post('/store-featured-image', 'store_featured_image')->name('store-featured-image');
    Route::get('/update-featuredImage/{id}', 'update_featuredImage')->name('update-featuredImage');
    Route::post('/update-featured-image/{id}', 'update_featured_image')->name('update-featured-image');
    

    Route::get('/featured-courses', 'featured_courses')->name('featured-courses');
    Route::get('/edit-featured-courses/{id}', 'edit_featured_course')->name('edit-featured-courses');
    Route::post('/update-featured-courses/{id}', 'update_featured_courses')->name('update-featured-courses');
    Route::get('/feature-a-course/{course}','feature_course')->name('feature-a-course');

    Route::get('/upcoming-event-image', 'upcoming_event_image')->name('upcoming-event-image');
    Route::get('/upcoming-event/{id}', 'upcoming_event')->name('upcoming-event');
    Route::post('/update-upcoming-event/{id}', 'update_upcoming_event')->name('update-upcoming-event');
    Route::get('/delete-event/{id}', 'delete_event')->name('delete-event');

    Route::get('/posts', 'posts')->name('posts');
    Route::get('/post/{id}', 'post_comment')->name('postcomment');
    Route::get('/delete-post/{id}', 'delete_post')->name('delete-post');

    Route::get('/users','users')->name('users');

    Route::get('/manage-news','news')->name('/manage-news');
    Route::get('/to-add-news','to_add_news')->name('/to_add-news');
    Route::post('/add-news','add_news')->name('/add-news');
    Route::get('/a-news/{news}','a_news')->name('/a-news');
    Route::put('/update_news/{news}','update_news')->name('update_news');


    Route::get('/manage-webinar','manage_webinar')->name('manage-webinar');
    Route::get('/add-webinar','add_webinar')->name('add-webinar');
    Route::post('/webinar-recordings','webinar_recordings')->name('webinar-recordings');

    Route::get('/opportunities','opportunities')->name('opportunities');
    Route::get('/add-opportunity','add_opportunity')->name('add-opportunity');
    Route::post('/store-opportunity','store_opportunity')->name('store-opportunity');

    Route::get('/licenses', 'licenses')->name('licenses');
});

Route::controller(HomeController::class)->group( function(){
    Route::get('/','index')->name('/');
});

Route::controller(ToolsController::class)->group( function(){
    Route::get('/tools','tools')->name('tools');
    Route::get('/biz-debit-card','debit_card')->name('biz-debit-card');
    Route::get('/loans','loans')->name('loans');
    Route::get('/loan','loan')->name('loan');
    Route::get('/proposition','proposition')->name('proposition');
});

Route::controller(CommunityController::class)->group( function(){
    Route::get('/community/{id?}','community')->middleware('onlineUser')->name('community');
    Route::get('/news','news')->name('news');
    Route::get('/webinars','webinars')->name('webinars');
    Route::post('/store-post','store_post')->name('store-post');
    Route::post('/store-comment/{id}','store_comment')->name('store-comment');
    Route::post('/post-likes/{post_id}/{comment_id}','post_likes')->name('post-likes');

    Route::post('/reply-comment/{post_id}/{comment_id}','reply_comment')->name('reply-comment');
    Route::post('/edit-comment/{id}','edit_comment')->name('edit-comment');
});

Route::controller(DashboardController::class)->middleware(['auth'])->group( function(){
    Route::get('/dashboard/home','dashboard')->middleware('checkProfile')->name('dashboard/home');
    Route::get('/explore-courses','courses')->name('explore-courses');
    Route::get('/explore-course/{id}','explore_course')->name('explore-course');
    Route::get('/explore-webinars','webinars')->name('explore-webinars');
    Route::get('/explore-resources','resources')->name('explore-resources');
    Route::get('/settings-profile','profile_settings')->name('settings-profile');
    Route::post('/update-profile','update_profile')->name('update-profile');
    Route::get('/settings','settings')->name('settings');
    Route::get('/opportunity-zone','opportunity_zone')->name('opportunity-zone');
});

Route::controller(CoursesController::class)->group( function(){
    Route::get('/courses','courses')->name('courses');
    Route::get('/acourse/{id}','course')->name('acourse');
    Route::get('/category-courses/{id}','courses_by_category')->name('category-courses');
});


Route::controller(EnrolmentController::class)->middleware('auth')->group( function(){
    Route::post('/enrol', 'enrol')->name('enrol');
    Route::get('/enrollment/{course_id}', 'enrollment')->name('enrollment');
});


Route::controller(EventsController::class)->group( function(){
    Route::get('/events','events')->name('events');
    Route::get('/an-event/{id}','event')->name('an-event');
    Route::post('/fe-storeEvent','sore_event')->name('fe-storeEvent');
});

Route::controller(PartnerController::class)->group( function(){
    Route::get('/getFundedAfrica','get_funded_africa')->name('getFundedAfrica');
    Route::post('/fundedOne','funded_one')->name('fundedOne');

    Route::get('/getFundedAfrica2','get_funded_africa2')->name('getFundedAfrica2');
    Route::post('/fundedTwo','funded_two')->name('fundedTwo');
});

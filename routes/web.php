<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;

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

Route::get('/admin/login',[AdminAuthController::class,'login'])->name('/admin/login');
Route::post('/admin/logout',[AdminAuthController::class,'logout'])->name('/admin/logout');

Route::post('/admin/handle-login',[AdminAuthController::class,'handleLogin'])->name('/admin/handle-login');


Route::controller(AdminController::class)->prefix('admin')->middleware(['adminAuth'])->group( function(){
    Route::get('/dashboard','admin_dashboard')->name('dashboard');

    Route::get('/event','event')->name('event');
    Route::post('/store-event','store_event')->name('store-event');
    Route::get('/manage','manage_event')->name('manage');

    Route::get('/edit-event/{event}','edit_event')->name('edit-event');
    Route::post('/update-event/{event}','update_event')->name('update-event');

    Route::get('/analyse-event/{event}','analyse_event')->name('analyse-event');
    Route::get('/feature-event/{event}','feature_event')->name('feature-event');
    Route::get('/cancel-event/{event}','cancel_event')->name('cancel-event');

    Route::get('/postpone-event/{event}','postpone_event')->name('postpone-event');
    Route::post('/postpone/{event}','postpone')->name('postpone');

    Route::get('/industry','industry')->name('industry');
    Route::post('/store-industry','store_industry')->name('store-industry');
    Route::get('/manage-industry','manage_industry')->name('manage-industry');

    Route::get('/edit-industry/{industry}','edit_industry')->name('edit-industry');
    Route::post('/update-industry/{industry}','update_industry')->name('update-industry');

    Route::get('/delete-industry/{industry}','delete_industry')->name('delete-industry');

    Route::get('/manage-course','manage_course')->name('manage-course');
    Route::get('/course','course')->name('course');
    Route::post('/add-course','add_course')->name('add-course');
    Route::get('/edit-course/{course}','edit_course')->name('edit-course');
    Route::post('/update-course/{course}','update_course')->name('update-course');
    

    Route::get('/manage-mail', 'manage_mail')->name('manage-mail');
    Route::get('/mail', 'mail')->name('mail');
    Route::post('/send-mail', 'send_mail')->name('send_mail');

});

 Route::get('/', function () {
   return view('welcome');
 });
 
// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth'])->name('login');


Route::controller(CoursesController::class)->group( function(){
    Route::get('/courses','courses')->name('courses');
});

Route::controller(EventsController::class)->group( function(){
    Route::get('/events','events')->name('events');
});

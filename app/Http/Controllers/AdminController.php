<?php

namespace App\Http\Controllers;

use App\Models\Industries;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddEventRequest;
use App\Http\Requests\AddCourseRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Requests\AddIndustryRequest;
use App\Http\Requests\CourseCategoryRequest;
use App\Models\EventType;
use App\Models\Event;
use App\Models\HeroSlider;
use App\Models\FeaturedImage;
use App\Models\CourseType;
use App\Models\Course;
use App\Models\UpcomingEventImage;
use App\Models\Certificates;   
use App\Models\CourseCategories;   
use App\Models\Price;   
use App\Models\UserTypes;   
use Illuminate\Support\Str;
use File;



class AdminController extends Controller
{

    public function sliders(){
        $sliders = HeroSlider::all();
        
        return view('admin.sliders', compact('sliders'));
    }

    public function change_hero_slider($id){
        $slider = HeroSlider::findOrFail($id);
        return view('admin.change-hero-slider', compact('slider','id'));
    }

    public function update_hero_slider(Request $request, $id){
        $media = HeroSlider::findOrFail($id);

        $data = [];
        if ($request->hasFile('photo')) {

            foreach ($request->photo as $image) {
                $temporaryFilePath = $image->getPathname();
                $image_info = getimagesize( $temporaryFilePath);

                $image_width  = $image_info[0];
                $image_height = $image_info[1];

                if ($image_width !== 1440 && !$image_height !== 455) {
                    return redirect()->back()->with('error', 'Landing page sider dimension must to be 1440 X 455');
                }

                $allowedfileExtensions = ['pdf','jpg','png','docx','jpeg','gif','svg'];
                $extension = $image->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtensions);

                if($check){
                    $file_name = Str::random(4) . '.' . $extension;
                    $image->move(public_path('images'), $file_name);
                    $data[] = $file_name;
                }else{
                    return redirect()->back()->with('error', 'File type not supported');
                }
            }
            $old_photo = $media->slider;
            $old_photo = json_decode($old_photo);

            foreach($old_photo as $picture){
                if($picture){
                    // unlink(storage_path('app/public/images/' . $picture));
                    unlink(public_path('images/') . $picture);
                }
            }
            
            $media->slider = json_encode($data);
            $media->save();
        }

        return redirect('/dashboard')->with('success', 'Image added successfully! 😃');

    }

   
    public function featured_image(){
        $featuredImage = FeaturedImage::all()->first();
        return view('admin.featured-image', compact('featuredImage'));
    }

    public function create_featured_image(){
        $featuredImage = FeaturedImage::all()->first();
        if($featuredImage){
            return redirect()->back()->with('warning', 'There can only be one featured Image. Update Instaed');
        }
        return view('admin.add-featured-image', compact('featuredImage'));
    }

    public function store_featured_image(Request $request){
        try{
            $feturedImage              = new FeaturedImage;
            $feturedImage->name        = $request->name;
            $feturedImage->company     = $request->company;
            $feturedImage->role        = $request->role;
            $feturedImage->testimonial = $request->testimonial;
            $feturedImage->description = $request->description;

            if ($request->hasFile('photo')) {
                    $allowedfileExtensions = ['pdf','jpg','png','docx','jpeg','gif','svg'];
                    $image = $request->photo;

                    $extension = $image->getClientOriginalExtension();
                    $check = in_array($extension, $allowedfileExtensions);
                    if($check){
                        $file_name = Str::random(4) . '.' . $extension;
                        $image->move(public_path('images'), $file_name);
                    }else{
                        return redirect()->back()->with('error', 'File type not supported');
                    }
            }
                
            $feturedImage->featured_image = $file_name;
            $feturedImage->save();
        
            return redirect('/dashboard')->with('success', 'Featured Image added successfully! 😃');
        } catch(\Exception $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }catch(\Throwable $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }

    }

     public function update_featuredImage($id){
        $featuredImage = FeaturedImage::findOrFail($id);
        return view('admin.update-featured-image',compact('featuredImage','id'));
    }

    public function update_featured_image(Request $request, $id){
        try{
            $feturedImage              = FeaturedImage::findOrFail($id);
            $feturedImage->name        = $request->name;
            $feturedImage->company     = $request->company;
            $feturedImage->role        = $request->role;
            $feturedImage->testimonial = $request->testimonial;
            $feturedImage->description = $request->description;

            if ($request->hasFile('photo')) {
                    $allowedfileExtensions = ['pdf','jpg','png','docx','jpeg','gif','svg'];
                    $image = $request->photo;

                    $extension = $image->getClientOriginalExtension();
                    $check = in_array($extension, $allowedfileExtensions);
                    if($check){
                        $file_name = Str::random(4) . '.' . $extension;
                        $image->move(public_path('images'), $file_name);
                    }else{
                        return redirect()->back()->with('error', 'File type not supported');
                    }

                    $old_photo = $feturedImage->featured_image;

                    if($old_photo){
                        unlink(public_path('images/') . $old_photo);
                        $feturedImage->featured_image = $file_name;
                    }else{
                        $feturedImage->featured_image = $feturedImage->featured_image;
                    }
            }
                
            $feturedImage->save();
        
            return redirect('/dashboard')->with('success', 'Featured Image updated successfully! 😃');
        } catch(\Exception $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }catch(\Throwable $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }
    }


    /* Featured Courses */
    public function featured_courses(){
        $featuredCourses = Course::where('is_featured', 1)->get();
        return view('admin.featured-courses', compact('featuredCourses'));
    }

    public function edit_featured_course($course){
        $featuredCourse = Course::findOrFail($course);
        return view('admin.change-featured-courses', compact('featuredCourse'));
    }
    public function update_featured_courses(Request $request, $id){
        
         try{
            $featuredCourse = Course::findOrFail($id);

            if ($request->hasFile('photo')) {
                    $image   = $request->photo;
                    $temporaryFilePath = $image->getPathname();
                    $image_info = getimagesize( $temporaryFilePath);

                    $image_width  = $image_info[0];
                    $image_height = $image_info[1];

                    if ($image_width !== 396 && !$image_height !== 245) {
                        return redirect()->back()->with('error', 'Featured course Image dimension must to be 396px X 245px');
                    }

                    $allowedfileExtensions = ['pdf','jpg','png','docx','jpeg','gif','svg'];
                    

                    $extension = $image->getClientOriginalExtension();
                    $check = in_array($extension, $allowedfileExtensions);

                    if($check){
                        $file_name = Str::random(4) . '.' . $extension;
                        $image->move(public_path('images'), $file_name);
                    }else{
                        return redirect()->back()->with('error', 'File type not supported');
                    }

                    $old_photo = $featuredCourse->image;

                    if($old_photo){
                        unlink(public_path('images/') . $old_photo);
                        $featuredCourse->image = $file_name;
                    }else{
                        $featuredCourse->image = $featuredCourse->image;
                    }
            }
                
            $featuredCourse->save();
        
            return redirect('/dashboard')->with('success', 'Featured Course Image updated successfully! 😃');
        } catch(\Exception $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }catch(\Throwable $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }
    }

    public function upcoming_event_image(){
        $events = UpcomingEventImage::all();
        return view('admin.upcoming-event-image', compact('events'));
    }

    public function upcoming_event($id){
        $upcomingEventImage  = UpcomingEventImage::findOrFail($id);
        $events = Event::where('is_upcoming',1)->get();
        return view('admin.update-upcoming-event', compact('upcomingEventImage','events'));
    }

    public function update_upcoming_event(Request $request, $id){
        try {
            $upcomingEventImage = UpcomingEventImage::findOrFail($id);
            $upcomingEventImage->event_id = $request->event;

            if ($request->hasFile('image')) {
                $allowedfileExtensions = ['pdf','jpg','png','docx','jpeg','gif','svg'];
                $newImage = $request->file('image');
      
                $extension = $newImage->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtensions);

                if($check){
                    $old_photo = $upcomingEventImage->event_image;

                    $file_name = Str::random(4) . '.' . $extension;
                    $newImage->move(public_path('images'), $file_name);
                    if($old_photo){
                        unlink(public_path('images/') . $old_photo);
                        $upcomingEventImage->event_image = $file_name;
                    }else{
                      $upcomingEventImage->event_image = $upcomingEventImage->event_image;
                    }
                    
                }else{
                    return redirect()->back()->with('error', 'File type not supported');
                }
      
            }
          
            $upcomingEventImage->save();

            flash()->addSuccess('Featured Upcoming Event image updated Successfully!😃');
            return redirect('/manage');
        }catch (\Exception$e) {
            report($e);
            report($e->getMessage());

            flash()->addError('Featured Upcoming Event image was not updated!😞');
            return redirect('/manage');
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage())->withInput();
        }
    }

     public function create_video_slider(){
        return view('admin.add-video-slider');
    }

    public function update_video_slider(Request $request){
        dd($request);
    }
    public function admin_dashboard(){
        $authUser   = Auth::user();
        $eventCount = Event::count();
        $courses    = Course::count();
        return view('admin.dashboard',compact('authUser','eventCount','courses'));
    }

    public function manage_event(){
        $events = Event::orderBy('id', 'desc')->paginate(5);
        return view('admin.manage', compact('events'));
    }

    public function event(){
        $eventType = EventType::all();
        return view('admin.event', compact('eventType'));
    }

    public function store_event(AddEventRequest $request){
       $responded = Route::dispatch( Request::create('api/admin/add-event', 'POST', $request->all()) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Event Created Successfully!😃');
            return redirect('/manage');
        }
        return redirect()->back()->with('error', 'Event Creation Failed. Please check Image dimension and try again. 😞'); 
}

    public function edit_event($event){
        $event = Event::findOrFail($event);
        $eventTypes = EventType::select(['id', 'name'])->get();
        return view('admin.edit-event', compact('event','eventTypes'));
    }


    public function update_event(UpdateEventRequest $request, $event){
        $responded = Route::dispatch( Request::create("api/admin/change-event/$event", 'POST', $request->all()) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Event Updated Successfully!😃');
            return redirect('/admin/manage');
        }
        return redirect()->back()->with('error', 'Event Updation Failed 😞');
    }

    public function delete_event($event){
        $responded = Route::dispatch( Request::create("api/admin/deleteEvent/$event", 'GET') );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Event deleted Successfully!😃');
            return redirect('/manage');
        }
        return redirect()->back()->with('error', 'Event deletion Failed 😞');
    }

    public function feature_event($id){
      try{
            $event = Event::findOrFail($id);

            if($event->is_featured == 0){
                $event::where('id',$id)->update(['is_featured' =>  1]);
            }
    
            if($event->is_featured == 1){
                $event::where('id',$id)->update(['is_featured' =>  0]);
            }
      
            flash()->addSuccess('Event status changed Successfully!😃');
            return redirect('/manage');
            
          }catch (\Exception$e) {
              report($e);
              report($e->getMessage());
          } catch (\Throwable $e) {
              report($e->getMessage());
              return back()->withError($e->getMessage())->withInput();
          }
        return redirect()->back()->with('error', 'Event status change has Failed 😞');
        
    }

    public function upcome_event($id){
        try{
              $event = Event::findOrFail($id);
  
              if($event->is_upcoming == 0){
                  $event::where('id',$id)->update(['is_upcoming' =>  1]);
              }
      
              if($event->is_upcoming == 1){
                  $event::where('id',$id)->update(['is_upcoming' =>  0]);
              }
        
              flash()->addSuccess('Event upcoming status changed Successfully!😃');
              return redirect('/manage');
              
            }catch (\Exception$e) {
                report($e);
                report($e->getMessage());
            } catch (\Throwable $e) {
                report($e->getMessage());
                return back()->withError($e->getMessage())->withInput();
            }
          return redirect()->back()->with('error', 'Event status change has Failed 😞');
          
      }

    public function postpone_event($id){
        $event = Event::findOrFail($id);
        return view('admin.postpone-event', compact('event'));
    }

    public function postpone(Request $request, $id){
        $responded = Route::dispatch( Request::create("api/admin/postpone-an-event/$id", 'POST', $request->all()) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Event postponed Successfully!😃');
            return redirect('/admin/manage');
        }
        return redirect()->back()->with('error', 'We couldn\'t postpone this Event 😞');
    }

    public function industry(){
        return view('admin.industry');
    }

    public function store_industry(AddIndustryRequest $request){
        $request->slug = strtolower( preg_replace('/-+/', '-', $request->slug ));
        $data = [
            'industry' => $request->industry,
            'slug'     => $request->slug,
        ];
        $responded = Route::dispatch( Request::create('api/admin/add-industry', 'POST', $data) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Industry Created Successfully!😃');
            return redirect('/admin/dashboard');
        }
        return redirect()->back()->with('error', 'Industry Creation Failed 😞');
    }

    public function manage_industry(){
        $industries = Industries::orderBy('id', 'desc')->paginate(5);
        return view('admin.manage-industry', compact('industries'));
    }

    public function edit_industry( $id){
        $industry = Industries::where('id', $id)->get()[0];
        return view('admin.edit-industry', compact('industry'));
    }

    public function update_industry(Request $request, $id){
        try {
            DB::beginTransaction();

            $industry = Industries::findOrFail($id);
            $industry->name = $request->industry;
            $industry->slug = $request->slug;
            $industry->save();
            DB::commit();
            return redirect('admin/manage-industry')->with("success", " Industry updated successfully.");
        } catch (\Exception$e) {
            report($e);
            report($e->getMessage());
            DB::rollback();

            return redirect('admin/manage-industry')->with('error','We could not update that Industry. Please contact the service personnel')->withInput();
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage());
        }
    }

    public function delete_industry($industry){
        dd($industry);
    }

    public function manage_course(Request $request){
        $search =  $request->search;
        if($request->has('search')){
            $courses = Course::where('name',$search)
            ->orWhereHas('courseCategory', function($categoryQuery) use ($search) {
                $categoryQuery->where('title', 'LIKE', '%' . $search . '%');
            })
            ->orWhereHas('courseType', function($authorQuery) use ($search){
                $authorQuery->where('name', 'LIKE', '%' . $search . '%');
            })->orderBy('id')->paginate(5);
        }else{
            $courses = Course::orderBy('id', 'desc')->paginate(5);
        }
        return view('admin.manage-course',compact('courses'));
    }

    public function course(){
        $courseType   = CourseType::all();
        $certificates = Certificates::all();
        $categories   = CourseCategories::all();
        $price        = Price::all();
        return view('admin.course', compact('courseType','certificates','categories','price'));
    }

    public function add_course(AddCourseRequest $request){
        $responded = Route::dispatch( Request::create('api/course/store-course', 'POST', $request->all()) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Course Created Successfully!😃');
            return redirect('/manage-course');
        }
        return redirect()->back()->with('error', 'Course Creation Failed 😞');
    }

    public function edit_course($id){
        $course       = Course::findOrFail($id);
        $courseTypes  = CourseType::all();
        $certificates = Certificates::all();
        $categories   = CourseCategories::all();
        $paymentType  = Price::all();

        return view('admin.edit-course', compact('course','courseTypes','certificates','categories','paymentType'));
    }

    public function update_course(Request $request, $id){
        $responded = Route::dispatch( Request::create("api/course/modify-course/$id", 'POST', $request->all()) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Course updated Successfully!😃');
            return redirect('/manage-course');
        }
        return redirect()->back()->with('error', 'Course updation Failed 😞');
    }

    public function feature_course($id){
        $responded = Route::dispatch( Request::create("api/course/feature-course/$id", 'GET') );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Course status updated Successfully!😃');
            return redirect('/featured-courses');
        }
        return redirect()->back()->with('error', 'Course status updation Failed 😞');
        
    }

    public function analyse_event($id){
        $event = Event::findOrFail($id);
        return view('admin.event-analytics');
    }

    public function manage_mail(){
    }

    public function mail(){
        $user_types = UserTypes::all();
        $courses = Course::all();
        return view('admin.mail', compact('user_types','courses'));
    }
   
    public function course_categories(){
        $categories = CourseCategories::orderBy('id', 'desc')->paginate(5);
        return view('admin.course-categories',compact('categories'));
    }
    public function add_category(){
        return view('admin.add-category');
    }
    public function add_course_category(CourseCategoryRequest $request){
        $responded = Route::dispatch( Request::create('api/courseCategory/store-course-category', 'POST', $request->all()) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Course Category Created Successfully!😃');
            return redirect('/course-categories');
        }
        return redirect()->back()->with('error', 'Course Category Creation Failed 😞');

    }
    public function edit_course_category($category){
        $category = CourseCategories::findOrFail($category);
        return view('admin.edit-category', compact('category'));
    }
    public function update_course_category(Request $request,$category ){
        $responded = Route::dispatch( Request::create("api/courseCategory/modify-course-category/$category", 'POST', $request->all()) );
        if ($responded->status() == 200 ) {
            flash()->addSuccess('Course category updated Successfully!😃');
            return redirect('/course-categories');
        }
        return redirect()->back()->with('error', 'Course category updation Failed 😞');
    }
}

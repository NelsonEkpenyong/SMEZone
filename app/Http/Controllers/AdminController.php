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
use App\Models\EventType;
use App\Models\Event;
use App\Models\CourseType;
use App\Models\Course;
use App\Models\Certificates;   
use App\Models\CourseCategories;   
use App\Models\Price;   
use App\Models\UserTypes;   

class AdminController extends Controller
{
    public function admin_dashboard(){
        $authUser = Auth::user();
        $eventCount = Event::count();
        return view('admin.dashboard',compact('authUser','eventCount'));
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
            return redirect('/admin/manage');
        }
        return redirect()->back()->with('error', 'Event Creation Failed 😞');
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
            return redirect('/admin/manage');
            
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
            'slug' => $request->slug,
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
            return redirect('/admin/manage-course');
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
            return redirect('/admin/manage-course');
        }
        return redirect()->back()->with('error', 'Course updation Failed 😞');
    }
    public function analyse_event($id){
        $event = Event::findOrFail($id);
        dd($event);
        return view('admin.event-analytics');
    }

    public function manage_mail(){

    }

    public function mail(){
        $user_types = UserTypes::all();
        $courses = Course::all();
        return view('admin.mail', compact('user_types','courses'));
    }
   
}

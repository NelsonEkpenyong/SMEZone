<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventRegistration;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\State;
use App\Models\OpportunityZone;
use App\Models\Lga;
use App\Models\Industries;
use App\Models\Genders;
use App\Models\Enrollments;
use App\Models\CourseCategories;
use App\Models\Course;
use App\Models\RadioDigest;
use App\Models\WebinarRecordings;
use App\assets\Utility;


class DashboardController extends Controller
{
    public function dashboard(){
        $authUser = Auth::id();
        $enrollments = Enrollments::where('user_id', auth()->user()->id)->count();
        $registeredEventCount = EventRegistration::where('user_id',$authUser)->count();
        $user = Auth::user();
        if($user->last_activity){
            Utility::recordLicense('Seen the course list',$user);
        }
        return view('community.dashboard.dashboard', compact('authUser','registeredEventCount','enrollments'));
    }

    public function courses(){
        $enrollments = Enrollments::orderBy('id','desc')->where('user_id', auth()->user()->id)->paginate(10);
        // dd($enrollments);
        $categories  = CourseCategories::all();
        foreach ($categories as $category) {
            $courses = $enrollments->filter(function ($enrollment) use ($category) {
                return $enrollment->course->courseCategory->id == $category->id;
            });
    
            $coursesByCategory[$category->id] = $courses;
        }
        return view('community.dashboard.explore-courses', compact('enrollments','categories', 'coursesByCategory'));
    }

    public function explore_course(int $id){
        $course = Course::findOrFail($id);
        return view('community.dashboard.explore-course', compact('course'));
    }

    public function resources(){
        return view('community.dashboard.explore-resources');
    }

    public function webinars(){
        $user = Auth::user();
        if($user->last_activity){
            Utility::recordLicense('explored webinars',$user);
        }
        $webinars = WebinarRecordings::orderBy('id', 'desc')->paginate(15);
        return view('community.dashboard.explore-webinars', compact('webinars'));
    }

    public function profile_settings(){
        $user       = Auth::user();
        $industries = Industries::all();
        $genders    = Genders::all();
        $states     = State::orderBy('id', 'desc')->get();
        $lgas       = Lga::orderBy('id', 'desc')->get();

        return view('community.dashboard.settings-profile',compact('user','industries','genders','states','lgas'));
    }

    public function update_profile(Request $request){
        try{
            $user = User::findOrFail($request->id);
            $user->first_name        = $request->first_name;
            $user->last_name         = $request->last_name;
            $user->email             = $request->email;
            $user->phone             = $request->phone;
            $user->gender_id         = $request->gender_id;
            $user->dob               = $request->dob;
            $user->have_business     = $request->have_business;
            $user->years_in_business = $request->no_of_years_in_business ? $request->no_of_years_in_business : null;
            $user->industry_id       = $request->industry ? $request->industry : null;
            $user->account           = $request->account ? $request->account : null;
            $user->account_status    = $request->account_status ? $request->account_status : null;
            $user->address           = $request->address;
            $user->state_id          = $request->state;
            $user->lga_id            = $request->lga;
            $user->save();

            return redirect('/dashboard/home')->with('success', 'Profile updated successfully! 😃');

        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
            return redirect('/settings-profile')->with('error','Profile could not be updated. Please try again')->withInput();
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage())->withInput();
        }
    }

    public function settings(){
        return view('community.dashboard.settings');
    }

    public function opportunity_zone(){
        $opportunities = OpportunityZone::all();
        return view('community.dashboard.opportunityList', compact('opportunities'));
    }

    public function radio_digest(){
        $digests = RadioDigest::all();
        return view('community.dashboard.radioDigest', compact('digests'));
    }
}

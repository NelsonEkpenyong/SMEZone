<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventRegistration;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\State;
use App\Models\Lga;
use App\Models\Industries;
use App\Models\Genders;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        $authUser = Auth::id();
        $registeredEventCount = EventRegistration::where('user_id',$authUser)->count();
        return view('community.dashboard.dashboard', compact('authUser','registeredEventCount'));
    }

    public function courses(){
        return view('community.dashboard.explore-courses');
    }

    public function resources(){
        return view('community.dashboard.explore-resources');
    }

    public function webinars(){
        return view('community.dashboard.explore-webinars');
    }

    public function profile_settings(){
        $user       = Auth::user();
        $industries = Industries::all();
        $genders    = Genders::all();
        $states     = State::orderBy('id', 'desc')->get();
        $lgas       = Lga::orderBy('id', 'desc')->get();

        return view('community.dashboard.settings-profile',compact('user','industries','genders','states','lgas'));
    }

    public function update_profile($id, Request $request){
        dd($id,$request);
    }

    public function settings(){
        return view('community.dashboard.settings');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventRegistration;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\State;
use App\Models\Lga;
use App\Models\Industries;
use App\Models\Genders;

class DashboardController extends Controller
{
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
}

<?php

namespace App\Http\Controllers\api;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AddIndustryRequest;
use App\Http\Requests\AddCourseTypeRequest;
use App\Services\CourseService;
use App\Services\AddIndustryService;
use App\Services\AddCourseTypeService;
use App\Services\PostService;


class AdminController extends Controller
{

    public function handleLogin(Request $request){
        try{
            $validator =  Validator::make($request->all(),[
                'email'    => [$request->me, 'email'],
                'password' => ['required'],
            ]);
            
            if ($validator->fails()) {
                return redirect('/admin/login')->withErrors($validator)->withInput();
            }

            if(!Auth::attempt($request->only(['email','password']))){
                return redirect('/admin/login')->with('error','Either your email or Password is not correct.')->withInput();
            }

            if (Auth::attempt($request->only(['email','password']))){
                if( Auth::user()->role_id == 1){
                    return redirect()->route('dashboard')->with('success', 'logged in successfully! 😃');
                }
            }

        }catch(\Exception $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }catch(\Throwable $error){
            report($error->getMessage());
            return response()->json(['status'  => false,'message' => $error->getMessage()],500);
        }

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login')->with('success', 'logged out Successfully! 😃' );
    }

    public function delete_course($course ){ 
        return CourseService::deleteCourse($course);
    }


    public function delete_post($post){
        return PostService::deletePost($post);
    }

    public function add_industry(AddIndustryRequest $request){
        return AddIndustryService::addIndustry($request);
    }
    public function add_course_type(AddCourseTypeRequest $request){
        return AddCourseTypeService::addCourseType($request);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Enrollments;
use Illuminate\Http\Request;

class EnrolmentController extends Controller
{
    public function enrol(Request $request){
        try {
            $user_id = $request->user_id;
            $course_id = $request->course_id;
            $check = Enrollments::where(['user_id' => $user_id, 'course_id' => $course_id])->count();
            if ($check) {
                return redirect()->back()->with('error', 'you have already enroled for this course  😞');
            }

            Enrollments::create([
                'course_id' => $course_id,
                'user_id' => $user_id,
                'enrrolled' => 1
            ]);

            flash()->addSuccess('you have enrolled Successfully!😃');
            return redirect()->back();
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage())->withInput();
        }
        return redirect()->back()->with('error', 'Enrollment Failed 😞');
    }

    public function enrollment(int $course_id){
        try {
            $user_id = \Auth::user()->id;
            $check = Enrollments::where(['user_id' => $user_id, 'course_id' => $course_id])->count();

            if ($check) {
                return redirect()->back()->with('error', 'You have already enrolled for this course.😞');
            }

            Enrollments::create(['course_id' => $course_id, 'user_id' => $user_id,'enrrolled' => 1 ]);

            flash()->addSuccess('You have Successfully enrolled for this course!😃');
            return redirect('explore-courses');
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
        } catch (\Throwable $e) {
            report($e->getMessage());
            return back()->withError($e->getMessage())->withInput();
        }
    }
}

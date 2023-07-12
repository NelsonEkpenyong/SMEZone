<?php

namespace App\Http\Controllers;

use App\Models\Enrollments;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollmentEmail;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Log;

class EnrolmentController extends Controller
{


    public function enroll(Request $request){
        try {
            $user_id   = $request->user_id;
            $course_id = $request->course_id;
            $check     = Enrollments::where(['user_id' => $user_id, 'course_id' => $course_id])->exists();
            if ($check) {
                return redirect()->back()->with('error', 'you have already enroled for this course  😞');
            }

            Enrollments::create([ 'course_id' => $course_id, 'user_id'   => $user_id, 'enrrolled' => 1 ]);

            flash()->addSuccess('you have enrolled Successfully!😃');
            return redirect()->back();
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
        } 
        return redirect()->back()->with('error', 'Enrollment Failed 😞');
    }

    public function enrollment(int $course_id){
        try {
            $user_id = auth()->user()->id;
            $check   = Enrollments::where(['user_id' => $user_id, 'course_id' => $course_id])->exists();

            if ($check) {
                return redirect()->back()->with('warning', 'You have already enrolled for this course.😞');
            }

            Enrollments::create(['course_id' => $course_id, 'user_id' => $user_id,'enrrolled' => 1 ]);

            $course = Course::findOrFail($course_id)->name;

            
            /* Queue::push(function ($job) {
                Mail::to(auth()->user()->email)->send(new EnrollmentEmail(auth()->user()));
                Log::info('The enrollment email has been sent.');
                $job->delete();
              });
            */

            /* dispatch(function () use ($course){
                Mail::to(auth()->user()->email)->send(new EnrollmentEmail(auth()->user(), $course));
                Log::info('The enrollment email has been sent.');
            }); */

            Mail::to($this->email())->send(new EnrollmentEmail($this->user(), $course));


            // Mail::to($this->user->email)->send(new EnrollmentEmail($this->user));
            flash()->addSuccess('You have Successfully enrolled for this course!😃');
            return redirect('explore-courses');
        } catch (\Exception $e) {
            report($e);
            report($e->getMessage());
        } 
    }
}

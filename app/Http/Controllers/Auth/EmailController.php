<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class EmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  string  $code
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify_email(string $code)
    {
        $user = User::where('email_verification_code', $code)->first();

        if (!$user) {
            return redirect()->back()->with("error", "Invalid url");
        } else {

            if ($user->email_verified_at) {
                flash()->addWarning('Email already verified!😃');
                return redirect()->back()->with("warning", "Email already verified");
            } else {
                $user->email_verified_at = \Carbon\Carbon::now();
                $user->save();
                Auth::login($user);
                return redirect()->back()->with("success", "Email successfully verified!");
            }
        }
    }

    public function verification_notification()
    {

        return view('auth.verify');
    }

    /**
     * Resend a verification code to the user's email address if they can't find it.
     *
     * @param  string  $code
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function resend_link(Request $request)
    {
        try{
            $email = session()->pull('email');
            if (!$email) {
                return back()->with('error', 'No email found to resend the verification link!');
            }

            $user = User::where('email', $email)->first();
            $user->email_verification_code = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new WelcomeEmail($user, $user->email_verification_code));

            return redirect('verification-notification');
        }catch(TransportExceptionInterface $e){
            report($e->getMessage());
            return view('errors.no_internet');
        }
    }
}
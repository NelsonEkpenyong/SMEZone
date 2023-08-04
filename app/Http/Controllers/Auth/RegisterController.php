<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Str;
use App\Http\Requests\registrationRequest;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register_form()
    {
        return view('auth.register');
    }

    /**
     * Create a new user.
     *
     * @param  array  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    protected function registration(registrationRequest $request)
    {
        $user = User::create([
            'first_name'   => $request->first_name,
            'last_name'    => $request->last_name,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'role_id'      => 4,
            'password'     => Hash::make($request->password),
            'have_access_bank_account' => $request->have_access_bank_account,
            'account_type' => $request->account_type,
            'email_verification_code' => Str::random(40)
        ]);

        Mail::to($user->email)->send(new WelcomeEmail($user, $user->email_verification_code));
        session()->put('email', $request->email);

        return redirect('verification-notification');
    }



}
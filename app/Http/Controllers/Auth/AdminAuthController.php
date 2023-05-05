<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function login(){
        return view('auth.admin.login');
    }

    public function handleLogin(Request $request){
        try{
            $validator =  Validator::make($request->all(),[
                'email'    => ['required', 'email'],
                'password' => ['required'],
            ]);
            
            if ($validator->fails()) {
                return redirect('/admin')->withErrors($validator)->withInput();
            }

            if(!Auth::attempt($request->only(['email','password']))){
                return redirect('/admin')->with('error','Either your email or Password is not correct.')->withInput();
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin')->with('success', 'logged out Successfully! 😃' );
    }
}

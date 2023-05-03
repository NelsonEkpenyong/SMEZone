<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if (
                empty($user->dob) &&
                empty($user->gender_id) &&
                empty($user->have_business) && 
                empty($user->industry_id) &&
                empty($user->account_status) && 
                empty($user->industry_id) &&
                empty($user->years_in_business) && 
                empty($user->address) && 
                empty($user->state_id) && 
                empty($user->lga_id) && 
                empty($user->account)
           ) 
        {
             return redirect('/settings-profile');
        }
        return $next($request);
    }
}

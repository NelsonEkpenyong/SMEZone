<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function user(){
        return auth()->user();
    }

    public function id(){
        return auth()->user()->id;
    }


    public function first_name(){
        return auth()->user()->first_name;
    }

    public function last_name(){
        return auth()->user()->last_name;
    }


    public function full_name(){
        return auth()->user()->first_name . " " . auth()->user()->last_name;
    }


    public function email(){
        return auth()->user()->email;
    }

    public function phone(){
        return auth()->user()->phone;
    }
}

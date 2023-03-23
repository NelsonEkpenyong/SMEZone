<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    //

    public function dashboard(){
        return view('community.dashboard');
    }

    public function community(){
        return view('community.community');
    }

    public function news(){
        return view('community.news');
    }

    public function webinars(){
        return view('community.webinars');
    }
}

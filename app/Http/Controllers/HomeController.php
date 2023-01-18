<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FeaturedCourseImage;
use App\Models\FeaturedEventImage;
use App\Models\FeaturedImage;
use App\Models\HeroSlider;
use App\Models\VideoSlider;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function index()
    {
        $heroSlider          = HeroSlider::select('slider')->first();
        $videoSliders        = VideoSlider::all();
        $featuredImage       = FeaturedImage::all()->first();
        $FeaturedEventImage  = FeaturedEventImage::all();
        $FeaturedCourseImage = FeaturedCourseImage::all();

        return view('welcome', compact('heroSlider','videoSliders','featuredImage','FeaturedEventImage','FeaturedCourseImage'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FeaturedCourseImage;
use App\Models\FeaturedEventImage;
use App\Models\FeaturedImage;
use App\Models\Event;
use App\Models\HeroSlider;
use App\Models\VideoSlider;
use App\Models\Course;
use App\Models\UpcomingEventImage;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function index(){
        $heroSlider          = HeroSlider::select('slider')->first();
        $videoSliders        = VideoSlider::all();
        $featuredImage       = FeaturedImage::all()->first();
        $FeaturedEventImage  = FeaturedEventImage::all();
        $featured_courses    = Course::where('is_featured',1)->get();
        $upcomingEventImage  = UpcomingEventImage::all()->first();
        $upcomingEvents      = Event::where('is_upcoming',1)->get();
        return view('welcome', compact(
            'featured_courses','heroSlider',
            'videoSliders','featuredImage',
            'FeaturedEventImage','upcomingEventImage',
            'upcomingEvents'
        ));
    }
}

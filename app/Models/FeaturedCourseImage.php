<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedCourseImage extends Model
{
    use HasFactory;

    protected $table = 'featured_course_images';
    protected $fillable = [
        'featured_course_image1',
        'featured_course_image2',
        'featured_course_image3',
        'featured_course_image4',
        
    ];
}

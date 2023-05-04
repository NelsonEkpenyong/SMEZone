<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedImage extends Model
{
    use HasFactory;

    protected $table = 'featured_images';

    protected $fillable = [
        'featured_image', 
        'testimonial', 
        'name', 
        'role', 
        'company', 
        'description', 
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedEventImage extends Model
{
    use HasFactory;

    protected $table = 'featured_event_images';

    protected $fillable = [
        'featured_event_image',
    ];
}

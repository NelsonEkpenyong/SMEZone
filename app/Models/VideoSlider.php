<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSlider extends Model
{
    use HasFactory;

    protected $table = 'video_sliders';

    protected $fillable = [
        'video_slider1',
        'video_slider2',
        'video_slider3'
    ];
}

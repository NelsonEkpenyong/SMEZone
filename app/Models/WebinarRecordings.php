<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebinarRecordings extends Model
{
    use HasFactory;

    protected $fillable = [
        'webinar_name',
        'webinar_link',
        'webinar_thumbnail',
    ];
}

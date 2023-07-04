<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UpcomingEventImage extends Model
{
    use HasFactory;


    protected $table = 'upcoming_event_image';

    protected $fillable = [
        'event_id',
        'event_image',
    ];

    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class,'event_id');
    }
}

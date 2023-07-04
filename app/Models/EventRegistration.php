<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventRegistration extends Model
{
    use HasFactory;

    protected $table = 'event_registration';
    protected $fillable = [
        'user_id',
        'event_id',
        'venue_name'
    ];

    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class,'event_id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }


}

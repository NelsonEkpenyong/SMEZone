<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'start_date', 'end_date'];
    protected $fillable = [
        'event_name',
        'venue_name',
        'expected_participants',
        'venue_address',
        'event_type_id',
        'event_link',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'description',
        'event_image',
        'thumbnail',
        'invitation_email_banner',
        'invite_user'
    ];

    public function eventType(){
        return $this->belongsTo(EventType::class,'event_type_id');
    }
}

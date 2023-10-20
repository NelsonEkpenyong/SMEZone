<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'start_date', 'end_date'];
    protected $fillable = [
        'event_name',
        'speakers',
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
        'invite_user',
        'speaker'
    ];


    /* protected function start_date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    protected function end_date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
 */
    protected function start_time(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    protected function end_time(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    protected function venue_address(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    public function eventType() : BelongsTo
    {
        return $this->belongsTo(EventType::class,'event_type_id');
    }
}

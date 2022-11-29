<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;

    protected $table = 'event_registration';
    protected $fillable = [
        'first_name',
        'last_name',
        'first_name',
        'email',
        'phone',
        'gender_id',
        'role_id',
        'event_id',
        'venue_id'
    ];

    public function gender(){
        return $this->belongsTo(Genders::class,'gender_id');
    }

    public function event(){
        return $this->belongsTo(Event::class,'event_id');
    }

    public function venue(){
        return $this->belongsTo(Venue::class,'venue_id');
    }

    public function role(){
        return $this->belongsTo(Roles::class,'role_id');
    }
}

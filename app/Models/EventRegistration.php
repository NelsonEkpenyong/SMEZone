<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    use HasFactory;

    protected $table = 'event_registration';
    protected $fillable = [
        'user_id',
        'event_id',
        'venue_name'
    ];

    public function event(){
        return $this->belongsTo(Event::class,'event_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


}

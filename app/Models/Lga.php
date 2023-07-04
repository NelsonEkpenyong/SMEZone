<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lga extends Model
{
    use HasFactory;

    protected $table = 'lgas';

    public function state() : BelongsTo
    {
        return $this->belongsTo(State::class,'state_id');
    }
}

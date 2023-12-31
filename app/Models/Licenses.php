<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Licenses extends Model
{
    use HasFactory;

    protected $table = 'licenses';
    protected $fillable = [
        "user_id",
        "activity_type",
        "expires_at"
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

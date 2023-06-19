<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enrollments extends Model
{
    use HasFactory;

    protected $table = 'enrollments';

    protected $fillable = [
        'user_id',
        'course_id',
        'enrolled'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course() : BelongsTo
    {
        return $this->belongsTo(Course::class,'course_id');
    }

}

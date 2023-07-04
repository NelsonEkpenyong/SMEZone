<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmailNotification extends Model
{
    use HasFactory;

    protected $table = 'email_notifications';

    protected $fillable = [
        'user_type_id',
        'subject',
        'description',
        'video_link',
        'email_banner',
        'show_video',
        'use_banner'
    ];


    public function userType() : BelongsTo
    {
        return $this->belongsTo(UserTypes::class, 'user_type_id');
    }
}

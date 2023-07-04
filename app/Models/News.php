<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_title',
        'role_id',
        'excerpt',
        'image',
        'description',
        'pdf'
    ];

    protected $table = 'news';

    public function role() : BelongsTo
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }
}

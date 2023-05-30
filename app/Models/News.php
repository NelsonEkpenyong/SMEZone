<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function role(){
        return $this->belongsTo(Roles::class, 'role_id');
    }
}

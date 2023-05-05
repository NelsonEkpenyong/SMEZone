<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [ 'title', 'user_id', 'body',];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class)->orderby('created_at', 'desc')->with('user:id,first_name,last_name');
    }

    public function likes() {
        return $this->hasMany(PostLikes::class);
    }
}

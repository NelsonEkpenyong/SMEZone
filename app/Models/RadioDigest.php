<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadioDigest extends Model
{
    use HasFactory;

    protected $fillable = [
        'digest_name',
        'digest_link',
        'digest_thumbnail',
    ];
}

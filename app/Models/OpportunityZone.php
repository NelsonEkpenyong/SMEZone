<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpportunityZone extends Model
{
    use HasFactory;

    protected $table = 'opportunity_zone';

    protected $fillable = [
        'title', 
        'provider', 
        'link', 
        'description', 
        'image', 
    ];
}

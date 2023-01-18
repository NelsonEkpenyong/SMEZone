<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class HeroSlider extends Model
{
    use HasFactory;

    protected $table = 'hero_sliders';

    protected $fillable = [
        'slider',
    ];

    public function getImageNameAttribute($value){
        return public_path($value);
    }  

    protected function photo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

}

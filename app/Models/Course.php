<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'course';

    protected $with = ['courseCategory'];

    protected $fillable = [
        'type_id',
        'name',
        'embed_link',
        'certificate_id',
        'course_category_id',
        'payment_type_id',
        'synopsis',
        'description',
        'image',
        'is_featured',
    ];

    public function courseType(){
        return $this->belongsto(CourseType::class, 'type_id');
    }

    public function certificates(){
        return $this->belongsto(Certificates::class, 'certificate_id');
    }

    public function courseCategory(){
        return $this->belongsto(CourseCategories::class, 'course_category_id');
    }

    public function cost(){
        return $this->belongsto(Price::class, 'payment_type_id');
    }

}

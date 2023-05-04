<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategories extends Model
{
    use HasFactory;

    protected $table = 'course_categories';

    protected $fillable = [
        'title',
        'description',
        'is_active'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class,'course_category_id');
    }
}

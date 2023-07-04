<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'synopsis',
        'description',
        'image',
        'pdf',
        'is_featured',
    ];

    public function courseType() : BelongsTo
    {
        return $this->belongsto(CourseType::class, 'type_id');
    }

    public function certificates() : BelongsTo
    {
        return $this->belongsto(Certificates::class, 'certificate_id');
    }

    public function courseCategory() : BelongsTo
    {
        return $this->belongsto(CourseCategories::class, 'course_category_id');
    }

    public function cost() : BelongsTo
    {
        return $this->belongsto(Price::class, 'payment_type_id');
    }

}

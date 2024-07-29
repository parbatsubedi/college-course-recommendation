<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;
    protected $table="course_detail";
    protected $fillable=['id', 'description', 'course_id', 'college_id'];

    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    
    /**
     * Get all of the inquiry for the CourseDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inquiry()
    {
        return $this->hasMany(Inquiry::class, 'coursedetail_id', 'id');
    }
    
}

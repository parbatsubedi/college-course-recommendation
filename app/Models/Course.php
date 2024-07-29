<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'id',
        'stream',
        'subStream',
        'name',
        'shortName',
        'description',
        'gpa_limit',
        'duration',
    ];

    public function courseDetails()
    {
        return $this->hasMany(CourseDetail::class, 'course_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materials';
    protected $fillable = [
        'title', 
        'created_by',
        'content',
        'course_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function progress()
    {
        return $this->hasMany(StudentProgress::class, 'course_id', 'id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable =[
        'is_absent',
        'is_justified',
        'student_id',
        'lesson_id',
    ];

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function lesson():BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }
}

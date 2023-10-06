<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade',
        'remark',
        'exam_id',
        'student_id',
    ];

    public function exam():BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}

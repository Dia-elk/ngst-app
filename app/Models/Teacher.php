<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'school_id',
        'subject_id',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function school():BelongsTo
    {
        return $this->belongsTo(School::class);
    }
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function lessons():HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function homeWorks():HasMany
    {
        return $this->hasMany(HomeWork::class);
    }

    public function exams():HasMany
    {
        return $this->hasMany(Exam::class);
    }
}

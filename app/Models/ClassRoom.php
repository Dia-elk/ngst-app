<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'degree_id',
        'school_id',
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function degree(): BelongsTo
    {
        return $this->belongsTo(Degree::class);
    }

    public function classRoomStudents(): HasMany
    {
        return $this->hasMany(ClassRoomStudent::class);
    }

    public function lessons():HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function homeWork():HasMany
    {
        return $this->hasMany(HomeWork::class);
    }

    public function exams():HasMany
    {
        return $this->hasMany(Exam::class);
    }


}

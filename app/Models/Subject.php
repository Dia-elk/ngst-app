<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function teachers():HasMany
    {
        return $this->hasMany(Teacher::class);
    }

    public function lessons():HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function exams():HasMany
    {
        return $this->hasMany(Exam::class);
    }
}

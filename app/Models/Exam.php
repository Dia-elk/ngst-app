<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teacher_id',
        'subject_id',
        'class_room_id',
    ];

    public function teacher():BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function classRoom():BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}

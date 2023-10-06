<?php

namespace App\Models;

use Database\Factories\HomeWorkReportFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'parent_id',
        'name',
        'dob',
        'massar_code',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(StudentParent::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function classRoomStudent(): HasMany
    {
        return $this->hasMany(ClassRoomStudent::class);
    }

    public function homeWorkReports(): HasMany
    {
        return $this->hasMany(HomeWorkReport::class);
    }

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }

    public function attendances():HasMany
    {
        return $this->hasMany(Attendance::class);
    }
}

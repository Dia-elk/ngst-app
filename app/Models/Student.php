<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}

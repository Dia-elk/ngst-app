<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'degree_id',
        'school_id',
    ];

    public function school():BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function degree():BelongsTo
    {
        return $this->belongsTo(Degree::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Degree extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'education_level_id',
    ];

    public function educationLevel():BelongsTo
    {
        return $this->belongsTo(EducationLevel::class);
    }

    public function classRooms():HasMany{
        return $this->hasMany(ClassRoom::class);
    }
}

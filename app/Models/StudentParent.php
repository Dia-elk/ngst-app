<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudentParent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'whatsapp',
    ];

    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }
}

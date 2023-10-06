<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HomeworkStatus extends Model
{
    use HasFactory;

    protected $fillable=[
      'name'
    ];
    public function homeWorkReports(): HasMany
    {
        return $this->hasMany(HomeWorkReport::class);
    }
}

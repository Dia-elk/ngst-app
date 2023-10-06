<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HomeWorkReport extends Model
{
    use HasFactory;

    protected $fillable=[
        'home_work_id',
        'status_id',
        'student_id',
    ];


    public function status():BelongsTo
    {
        return $this->belongsTo(HomeworkStatus::class);
    }


    public function homeWork():BelongsTo
    {
        return $this->belongsTo(HomeWork::class);
    }

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

}

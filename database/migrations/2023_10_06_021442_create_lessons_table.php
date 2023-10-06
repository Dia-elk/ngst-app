<?php

use App\Models\ClassRoom;
use App\Models\School;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ClassRoom::class,'class_room_id')->constrained('class_rooms');
            $table->foreignIdFor(School::class,'school_id')->constrained('schools');
            $table->foreignIdFor(Teacher::class,'teacher_id')->constrained('teachers');
            $table->foreignIdFor(Subject::class,'subject_id')->constrained('subjects');
            $table->string('name');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};

<?php

use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('class_room_students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id')->constrained('students');
            $table->foreignIdFor(ClassRoom::class, 'class_room_id')->constrained('class_rooms');
            $table->string('n_list');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_room_students');
    }
};

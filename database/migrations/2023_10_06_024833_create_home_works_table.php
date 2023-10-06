<?php

use App\Models\ClassRoom;
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
        Schema::create('home_works', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ClassRoom::class ,'class_room_id')->constrained('class_rooms');
            $table->foreignIdFor(Teacher::class,'teacher_id')->constrained('teachers');
            $table->date('date');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_works');
    }
};

<?php

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
        Schema::create('home_work_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\HomeworkStatus::class,'status_id')->constrained('homework_statuses');
            $table->foreignIdFor(\App\Models\HomeWork::class,'home_work_id')->constrained('home_works');
            $table->foreignIdFor(\App\Models\Student::class,'student_id')->constrained('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_work_reports');
    }
};

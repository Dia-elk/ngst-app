<?php

use App\Models\School;
use App\Models\StudentParent;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(School::class,'school_id')->constrained('schools');
            $table->foreignIdFor(StudentParent::class,'parent_id')->constrained('student_parents');
            $table->string('name');
            $table->date('dob');
            $table->string('massar_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

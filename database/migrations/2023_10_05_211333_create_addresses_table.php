<?php

use App\Models\City;
use App\Models\Country;
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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(City::class,'city_id')->constrained('cities');
            $table->foreignIdFor(Country::class,'country_id')->constrained('countries');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->unsignedBigInteger('zip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

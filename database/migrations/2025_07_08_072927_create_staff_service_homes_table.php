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
        Schema::create('staff_service_homes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_home_id')->constrained('staff_homes')->onDelete('cascade');
            $table->foreignId('service_home_id')->constrained('service_homes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_service_homes');
    }
};

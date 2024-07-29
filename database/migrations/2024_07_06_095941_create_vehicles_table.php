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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained()->onDelete('cascade');
            $table->foreignId('vehicle_type_id')->constrained();
            $table->string('vehicle_number');
            $table->string('vehicle_model');
            $table->enum('fuel_type', ['petrol', 'diesel', 'cng', 'electric']);
            $table->string('rc_number')->nullable();
            $table->string('rc_image_front');
            $table->string('rc_image_back')->nullable();
            $table->string('insurance_number')->nullable();
            $table->string('insurance_image')->nullable();
            $table->string('fitness_certificate_number')->nullable();
            $table->string('seat_capacity')->nullable();
            $table->string('vehicle_name')->nullable();
            $table->string('vehicle_color')->nullable();
            $table->string('vehicle_permit_image')->nullable();
            $table->string('vehicle_permit_number')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

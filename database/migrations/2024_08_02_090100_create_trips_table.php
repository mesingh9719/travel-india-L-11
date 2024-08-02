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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index()->constrained()->onDelete('cascade');
            $table->foreignId('vehicle_id')->index()->constrained();
            $table->longText('start_trip')->nullable();
            $table->longText('end_trip')->nullable();
            $table->json('start_latitude_longitude')->nullable();
            $table->json('end_latitude_longitude')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('trip_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};

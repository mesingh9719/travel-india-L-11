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
        Schema::table('trips', function (Blueprint $table) {
            $table->renameColumn('start_trip', 'pickup_location')->nullable();
            $table->renameColumn('end_trip', 'drop_location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->renameColumn('pickup_location', 'start_trip')->nullable();
            $table->renameColumn('drop_location', 'end_trip')->nullable();
        });
    }
};

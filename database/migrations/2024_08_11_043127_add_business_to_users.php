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
        Schema::table('users', function (Blueprint $table) {
            
            $table->string('full_name')->nullable()->after('plan_id');
            $table->string('alternate_Mobile')->nullable()->after('full_name');
            $table->string('business_name')->nullable()->after('alternate_Mobile');
            $table->longText('business_address')->nullable()->after('business_name');
            $table->longText('home_address')->nullable()->after('business_address');
            $table->boolean('same_as_business')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

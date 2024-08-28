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
            $table->string('selfie_image')->nullable()->after('profile_image');
            $table->unsignedBigInteger('parent_id')->nullable()->after('plan_id');
            $table->boolean('verify_dl')->default(0)->after('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('selfie_image');
            $table->dropColumn('parent_id');
            $table->dropColumn('verify_dl');
        });
    }
};

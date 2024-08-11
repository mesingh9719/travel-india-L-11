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
            $table->renameColumn('first_name', 'fullname');
            $table->dropColumn('last_name');
            $table->renameColumn('whatsapp_number', 'Alternate_Mobile_Number')->nullable();
            $table->dropColumn('father_name')->nullable();
            $table->renameColumn('address', 'home_address')->nullable();
            $table->string('business_name')->nullable();
            $table->text('business_address')->nullable();
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

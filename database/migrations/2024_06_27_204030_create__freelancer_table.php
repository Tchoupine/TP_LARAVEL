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
        Schema::create('_freelancer', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // First Name
            $table->string('last_name');  // Last Name
            $table->string('phone_number'); // Phone Number
            $table->string('email_address')->unique(); // Email Address
            $table->text('address'); // Address
            $table->string('country'); // Country
            $table->string('city'); // City
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_freelancer');
    }
};

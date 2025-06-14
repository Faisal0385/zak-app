<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->nullable();

            // Foreign key: references id on property_types table
            $table->unsignedBigInteger('property_type_id');
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');

            $table->string('budget'); // Example: "500k - 1M AED"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};

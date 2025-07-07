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
        Schema::create('property_floor_layouts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('property_id')->constrained()->onDelete('cascade');

            $table->string('floor_name')->nullable();
            $table->string('floor_price')->nullable();
            $table->string('price_postfix')->nullable();
            $table->string('floor_size')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->text('description')->nullable();
            $table->string('floor_layout_image')->nullable(); // Store image path

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_floor_layouts');
    }
};

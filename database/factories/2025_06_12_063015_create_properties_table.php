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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('property_name')->unique();
            $table->string('property_id')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('before_price_label')->nullable();
            $table->string('after_price_label')->nullable();
            $table->string('price_unit')->nullable();
            $table->enum('price_on_call', ['yes', 'no'])->default('no');

            $table->string('size')->nullable();
            $table->string('land')->nullable();
            $table->integer('room')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('garages')->nullable();
            $table->string('garages_size')->nullable();
            $table->string('year_built')->nullable();

            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();

            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->text('google_map')->nullable();
            $table->text('video_url')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('file_attachment')->nullable();

            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->boolean('for_rent')->nullable();
            $table->boolean('for_sale')->nullable();
            $table->boolean('hot_offer')->nullable();
            $table->boolean('sale')->nullable();
            $table->boolean('sold')->nullable();

            $table->timestamps();

            // Foreign Keys (optional cascading based on needs)
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('set null');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

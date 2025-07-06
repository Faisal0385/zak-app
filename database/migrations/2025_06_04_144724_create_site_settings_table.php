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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->text('company_subtitle')->nullable();
            $table->text('office_address')->nullable();
            $table->text('head_office')->nullable();
            $table->text('other_office_address')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('hot_number')->nullable();
            $table->string('working_days')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('powered_by')->nullable();
            $table->text('google_map_iframe')->nullable();
            $table->string('footer_logo')->nullable();     // Store filename/path
            $table->string('header_logo')->nullable();     // Store filename/path
            $table->string('banner_image')->nullable();    // Store filename/path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};

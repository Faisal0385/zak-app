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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();

            // main fields
            $table->string('page_title');           // e.g. “About Us”
            $table->string('banner_image')->nullable(); // store the path or URL
            $table->text('our_story')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->string('video_link')->nullable();   // YouTube/Vimeo URL

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};

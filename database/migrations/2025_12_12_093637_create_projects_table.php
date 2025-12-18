<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            // Project Basic Details
            $table->string('name');                          // Project title
            $table->text('description');                     // Detailed description

            // Media
            $table->string('image_url')->nullable();         // Project image (banner/thumbnail)

            // Technology & Tags
            $table->string('tech_stack')->nullable();        // E.g., Laravel, React, AWS

            // Categorization
            $table->string('category')->default('GENERAL');  // FEATURED / CLIENT PROJECTS / INTERNAL PROJECTS

            // Optional Links
            $table->string('project_url')->nullable();       // Live link or GitHub repo
            $table->string('github_url')->nullable();        // Optional GitHub URL

            // Sorting & Visibility
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

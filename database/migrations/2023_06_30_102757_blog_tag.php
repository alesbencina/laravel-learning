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
      Schema::create('blog_tag', function (Blueprint $table) {
        $table->foreignId('blog_id')->references('id')->on('blog_posts')->onDelete('cascade');
        $table->foreignId('tag_id')->references('id')->on('tags')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::drop('blog_tag');
    }
};

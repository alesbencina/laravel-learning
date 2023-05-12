<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('comments', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->longText('body');
      $table->foreignId('blog_posts_id')->references('id')->on('blog_posts')->cascadeOnDelete();
      $table->foreignId('user_id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('comments');
  }

};

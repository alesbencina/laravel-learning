<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('blog_file', function (Blueprint $table) {
      $table->timestamps();
      $table->foreignId('blog_post_id')
        ->references('id')
        ->on('blog_posts')
        ->onDelete('cascade');

      $table->foreignId('file_id')
        ->references('id')
        ->on('files')
        ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('blog_file');
  }

};

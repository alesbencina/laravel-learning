<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('tag_file', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      $table->foreignId('tag_id')
        ->references('id')
        ->on('tags')
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
    Schema::dropIfExists('tag_file');
  }

};

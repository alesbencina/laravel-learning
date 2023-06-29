<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::table('blog_posts', function (Blueprint $table) {
      // It is not necessary that there is any tags on blog post.
      $table->foreignId('tag_id')->unsigned()->nullable()->change();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    //
  }

};

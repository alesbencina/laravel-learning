<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

  use HasFactory;

  public function blogposts() {
    return $this->hasMany(BlogPosts::class);
  }

  public function files() {
    return $this->belongsToMany(File::class, 'tag_file', 'tag_id');
  }

}

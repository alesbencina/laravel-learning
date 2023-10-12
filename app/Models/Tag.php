<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

  use HasFactory;

  protected $fillable = [
    'name',
    'url_alias',
  ];

  public function blogposts() {
    return $this->belongsToMany(BlogPosts::class, 'blog_tag', 'tag_id', 'blog_id');
  }

  public function files() {
    return $this->belongsToMany(File::class, 'tag_file', 'tag_id');
  }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model {

  use HasFactory;

  protected $fillable = [
    'name',
    'path',
  ];

  public function blogposts() {
    return $this->hasMany(BlogPosts::class);
  }

  public function tags() {
    return $this->hasMany(Tag::class);
  }

}

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

  protected $appends = ['url'];

  public function getPathAttribute($path) {
    return  "/" . $path;
  }

  public function getUrlAttribute() {
    return asset($this->path);
  }

  public function blogposts() {
    return $this->hasMany(BlogPosts::class);
  }

  public function tags() {
    return $this->hasMany(Tag::class);
  }

}

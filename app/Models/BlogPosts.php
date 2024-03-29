<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BlogPosts extends Model {

  use HasFactory;

  // #1 Allow updating only title instead of whole object.
  // used for security purposes
  // for example: account status, role, ids
  // "mass assignemnt vulnerbiltiy"

  protected $fillable = [
    'title',
    'description',
    'url_alias',
    'tag_id',
    'author_id',
    'summary',
  ];

  //#2 All is fillable except what is guarded.
  protected $guarded = ['id'];

  //#3 never allow mass assign. never provide generic array, devs need to be in a controll of the array

  // For eager loading, super cool because you reduce number of queries and solve N+1 problem.
  // Basically performs IN condition instead of WHERE tag=1 LIMIT 1; WHERE tag=2 LIMIT 1;
  // Opposite function - if you don't want tags or any relationships you can use ::without(['tag']).
  // Third option is create a helper method that returns this data.
  // protected $with = ['tag', 'author', 'comments'];

  /**
   * Transform from boolean to published or unpublished.
   */
  public function transformToString(int $value): string {
    if (!$value) {
      return 'Unpublished';
    }

    return 'Published';
  }

  public function tag() {
    return $this->belongsToMany(Tag::class, 'blog_tag', 'blog_id');
  }

  public function author() {
    return $this->belongsTo(User::class);
  }

  public function comments() {
    return $this->hasMany(Comment::class, 'blog_posts_id');
  }

  public function files() {
    return $this->belongsToMany(File::class, 'blog_file', 'blog_post_id');
  }

}

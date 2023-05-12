<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable {

  use HasApiTokens, HasFactory, Notifiable;

  protected $guarded = [];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];


  /**
   * Accessor - when we access to the property show it in this specific format.
   *
   * @param $username
   *
   * @return string
   */
  public function getUsernameAttribute($username) {
    return ucwords($username);
  }

  //
  /**
     * Mutator - when password is saved change it - in our case encrypt the password.
     * NAMING CONVENTION!! set{fieldName}Attribute.

     * @param $password
     *
     * @return void
     */
  public function setPasswordAttribute($password) {
    // Mutating the value before it's saved.
    $this->attributes['password'] = bcrypt($password);
  }

  /**
   * Get the related blog posts from this user.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function blogPosts(): HasMany {
    return $this->hasMany(BlogPosts::class, 'author_id');
  }

  public function comments(): HasMany {
    return $this->hasMany(Comment::class,'user_id');
  }

}

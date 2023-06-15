<?php

namespace App\Listeners;

use App\Events\CommentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyBlogAuthor implements ShouldQueue {

  use InteractsWithQueue;

  public $job;


  /**
   * Create the event listener.
   */
  public function __construct() {
    //
  }

  /**
   * Handle the event.
   */
  public function handle(CommentCreated $event): void {
    $test = 0;
  }

  public function attempts() {
    return 5;
  }

}

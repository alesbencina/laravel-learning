<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPosts;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TagController extends Controller {

  /**
   * Returns the create blog view.
   *
   * @return \Illuminate\View\View
   *   Returns the create blog from view.
   */
  public function form(): View {
    return view('admin.tags.form');
  }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

class TagController extends Controller {

  /**
   * Returns the create blog view.
   *
   * @return \Illuminate\View\View
   *   Returns the create blog from view.
   */
  public function form(Tag $tag): View {
    return view('admin.tags.form',[
      'tag' => $tag
    ]);
  }

  public function destroy(Tag $tag) {
    $tag->delete();
    return redirect()->to('/admin/tags-overview')->with('success', "Tag post $tag->name deleted.");
  }

}

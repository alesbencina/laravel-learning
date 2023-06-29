<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogPosts;
use Livewire\Component;

class Dashboard extends Component
{
    /**
     * @param $id
     *   The id of the component.
     * @param  int  $itemsPerPage
     *   The default items per page.
     */
    public function __construct($id = null, public int $itemsPerPage = 10)
    {
        parent::__construct($id);
    }

    public function render()
    {
        return view('livewire.admin.blog.dashboard', [
            'blogPosts' => BlogPosts::paginate($this->itemsPerPage),
        ]);
    }
}

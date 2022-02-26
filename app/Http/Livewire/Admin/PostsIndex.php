<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {
        $posts = Post::where('name','LIKE', '%' . $this->search. '%')
                    ->orwhereHas('category', function ($query){
                        $query->where('name', 'LIKE', '%' . $this->search. '%');
                    })
                    ->latest('id')
                    ->paginate();

        return view('livewire.admin.posts-index',compact('posts'));
    }
}


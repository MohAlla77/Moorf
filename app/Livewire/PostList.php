<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PostList extends Component
{

    #[Computed()]

    public function posts(){

        return Post::published()->orderBy("published_at","desc")->paginate(7);
    }
    public function render()
    {
        return view('livewire.post-list');
    }
}

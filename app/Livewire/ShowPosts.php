<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    public function render()
    {
        return view('livewire.show-posts', [
            'posts' => Post::all(),
        ]);
    }

    public function delete(Post $post)
    {
        $post->delete();
    }
}

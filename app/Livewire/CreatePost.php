<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Rule;

class CreatePost extends Component
{

    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:5', message: 'You need at least 5 characters')]
    public $title;

    #[Rule('required', message: 'Yo, add some content')]
    #[Rule('min:10', message: 'Yo, add at least 10 characters')]
    public $content;

    public function save()
    {
        // $this->validate([
        //     'title' => 'required|min:5',
        //     'content' => 'required|min:10',
        // ]);
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}

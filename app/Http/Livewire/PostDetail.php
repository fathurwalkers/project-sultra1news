<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostDetail extends Component
{
    protected $listeners = [
        'sendingPost' => 'handleSendingPost'
    ];

    public function render()
    {
        return view('livewire.post-detail');
    }

    public function handleSendingPost(Post $post)
    {
        dd($post);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostIndex extends Component
{
    public function render()
    {
        $post = Post::latest()->paginate(5);
        return view(
            'livewire.post-index',
            [
                'post' => $post
                ]
        )->extends('layouts.app');
    }
}

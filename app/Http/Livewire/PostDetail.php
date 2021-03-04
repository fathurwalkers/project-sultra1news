<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Collection;

class PostDetail extends Component
{
    public $post;
    public function render()
    {
        $post = collect([$this->post]);
        return view('livewire.post-detail', [
            'post' => $post
        ])->extends('layouts.app')->section('content');
    }

    public function mount($id)
    {
        $this->post = Post::find($id);
    }
}

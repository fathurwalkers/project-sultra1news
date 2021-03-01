<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostIndex extends Component
{
    public $post;
    public function render()
    {
        // $this->post = Post::latest()->paginate(5);
        return view('livewire.post-index')->extends('layouts.app');
    }
}

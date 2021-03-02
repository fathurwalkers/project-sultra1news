<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class PostIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
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

    // public function paginationView()
    // {
    //     return 'custom-pagination-links-view';
    // }
}

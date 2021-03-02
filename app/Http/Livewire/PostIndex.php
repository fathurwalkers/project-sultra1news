<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Kategori;
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
        )->extends('layouts.app')->section('content');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        dd($post);
    }

    public function info()
    {
        //
    }

    public function delete($id)
    {
        $post = Post::find($id);
        dd($post);
    }
}

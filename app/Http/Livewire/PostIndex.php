<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class PostIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $post = Post::latest()->paginate(3);
        return view(
            'livewire.post-index',
            [
                'post' => $post
                ]
        )->extends('layouts.app')->section('content');
    }

    public function edit($id)
    {
        return redirect()->route('post-edit', $id);
    }

    public function info($id)
    {
        Alert::success('Success Title', 'Success Message');
        $post = Post::find($id);
        return redirect()->route('post-detail', $post->id);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->forceDelete();
        return back();
    }
}

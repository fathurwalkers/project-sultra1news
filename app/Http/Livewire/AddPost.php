<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;
use Illuminate\Support\Arr;
use App\Models\Post;

class AddPost extends Component
{
    public $post_judul;
    public $post_body;
    public $kategori_req;
    public $increment;
    public $post_status;
    public function render()
    {
        $kategori = Kategori::latest()->get();
        return view('livewire.add-post', [
            'kategori' => $kategori
        ])->extends('layouts.app');
    }

    protected function rules()
    {
        return [
            'post_judul' => 'required'
        ];
    }

    public function addPost()
    {
        $this->validate();
        $kategori_req = $this->kategori_req;
        $post_judul = $this->post_judul;
        $post_status = $this->post_status;

        // foreach ($kategori_req as $item) {
        //     $kategori_find = Kategori::where('id', $kategori_req)->get();
        //     dump($kategori_find);
        // }
    }
}

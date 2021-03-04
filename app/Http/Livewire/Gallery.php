<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gambar;

class Gallery extends Component
{
    public function render()
    {
        return view('livewire.gallery', [
            'gambar' => Gambar::latest()->get(),
        ]);
    }
}

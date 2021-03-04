<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Post;

class KategoriPost extends Model
{
    use HasFactory;

    protected $table = 'kategori_post';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class);
    }

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}

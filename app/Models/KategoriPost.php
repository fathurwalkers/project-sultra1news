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

    public $timestamps = false;

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}

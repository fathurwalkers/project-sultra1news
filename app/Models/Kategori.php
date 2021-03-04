<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $guarded = [];

    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}

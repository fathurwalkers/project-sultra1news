<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Gambar extends Model
{
    use HasFactory;

    protected $table = 'gambar';
    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}

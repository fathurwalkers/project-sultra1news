<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Login;
use App\Models\Post;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'detail';
    protected $guarded = [];

    public function login()
    {
        return $this->hasOne(Login::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}

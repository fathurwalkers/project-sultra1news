<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Detail;
use App\Models\Gambar;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }

    public function gambar()
    {
        return $this->belongsTo(Gambar::class);
    }
}

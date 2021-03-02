<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $kategori_array = [
            'Nasional',
            'Internasional',
            'Terbaru',
            'Sultra1News',
            'Viral',
            'Trending',
            'Populer'
        ];
        foreach ($kategori_array as $item) {
            Kategori::create([
                'kategori_nama' => $item,
                'created_at' => now(),
                'updated_at' => now()
            ])->save();
        }
    }
}

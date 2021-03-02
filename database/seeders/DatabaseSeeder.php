<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Detail;
use App\Models\Login;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $detail = new Detail;
        $saveDetail = $detail->create([
            'detail_nama' => 'Administrator',
            'detail_telepon' => '085342072185',
            'detail_jeniskelamin' => 'L',
        ]);

        $login = new Login;
        $saveLogin = $login->create([
            'username' => 'admin',
            'password' => 'admin',
            'email' => 'admin@sultra1news.com',
            'email' => 'admin@sultra1news.com',
        ]);

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

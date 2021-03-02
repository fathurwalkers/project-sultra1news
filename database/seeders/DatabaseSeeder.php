<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
            'detail_tanggallahir' => 'null',
            'detail_foto' => 'null',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $saveDetail->save();

        $password = 'jancok';
        $hashedPassword = Hash::make($password, [
            'rounds' => 12,
        ]);
        $login = new Login;
        $saveLogin = $login->create([
            'username' => 'fathurwalkers',
            'password' => $hashedPassword,
            'email' => 'admin@sultra1news.com',
            'level' => 'admin',
            'status' => 'aktif',
            'token' => Str::random(16),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $saveLogin->detail()->associate($saveDetail->id);
        $saveLogin->save();

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

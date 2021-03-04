<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Models\Login;
use App\Models\Kategori;

class BackController extends Controller
{
    public function generate_post()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i<5 ; $i++) {
            $array_random = ['5', '6', '7', '8', '9', '10'];
            $array_random2 = ['2', '3', '4', '5'];
            $kategori = Kategori::select('id')->get()->toArray();
            $randomkategori = Arr::random($kategori, Arr::random($array_random2));
            $random = Arr::random($array_random);
            $post_judul = $faker->words($random, true);
            $explode_judul = explode(' ', $post_judul);
            $post_slug = implode('-', $explode_judul);
            $post_body = $faker->paragraphs($random, true);
            $post_code = Str::random(5);
    
            $post = new Post;
            $savePost = $post->create([
                'post_judul' => $post_judul,
                'post_slug' => $post_slug,
                'post_body' => $post_body,
                'post_headerfoto' => 'image/no-image.png',
                'post_status' => 'published',
                'post_code' => $post_code,
                'post_tanggalpublish' => now()
            ]);
            foreach ($randomkategori as $items) {
                $savePost->kategori()->attach($items);
            }
            $savePost->save();
        }
        return redirect()->route('post-index');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        //
    }

    public function post_login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $data_login = Login::where('username', $username)->first();
        if ($data_login) {
            $checkpassword = Hash::check($password, $data_login->password);
            if ($checkpassword) {
                if ($data_login->status == 'aktif') {
                    $users = session(['data_login' => $data_login]);
                    return redirect()->route('dashboard');
                }
            }
        }
    }
}

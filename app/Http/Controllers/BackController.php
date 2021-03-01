<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use App\Models\Post;

class BackController extends Controller
{
    public function generate_post()
    {
        $faker = Faker::create('id_ID');
        
        $array_random = ['5', '6', '7', '8', '9', '10'];
        $random = Arr::random($array_random);
        $post_judul = $faker->words($random, true);
        $explode_judul = explode(' ', $judul);
        $post_slug = implode('-', $explode_judul);
        dd($post_slug);

        $post = new Post;
        $savePost = $post->create([
            'post_judul' => $post_judul,
            'post_slug' => $post_slug,
        ]);
    }
}

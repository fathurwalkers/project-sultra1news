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
        $array_random = ['5', '6', '7', '8', '9', '10'];
        $faker = Faker::create('id_ID');
        $post = new Post;
        $savePost = $post->create([
            'post_judul' => $faker->word(Arr::random($array_random), true),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Models\Post;

class BackController extends Controller
{
    public function generate_post()
    {
        $faker = Faker::create('id_ID');
        
        $array_random = ['5', '6', '7', '8', '9', '10'];
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
        ]);
        $savePost->save();
        
        return redirect()->route('post-index');
    }
}

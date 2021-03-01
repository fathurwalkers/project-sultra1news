<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class FrontController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $faker = Faker::create('id_ID');
        $data = [
            'nama' => $faker->name
        ];
        return view('dashboard.index', compact('data'));
    }
}

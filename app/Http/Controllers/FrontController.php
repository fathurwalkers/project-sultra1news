<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('dashboard.index');
    }
}

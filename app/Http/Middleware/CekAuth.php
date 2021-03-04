<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekAuth
{
    public function handle(Request $request, Closure $next)
    {
        $users = session('data_login');
        if (!$users) {
            return redirect()->route('login')->with('tidak_login', 'Silahkan Login terlebih dahulu.');
        }
        return $next($request);
    }
}

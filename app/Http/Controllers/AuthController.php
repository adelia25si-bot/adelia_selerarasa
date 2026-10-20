<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (
            $request->username === 'admin' &&
            $request->password === 'admin'
        ) {
            return redirect('/dashboard');
        }

        return redirect('/auth')
            ->with('error', 'Username atau password salah!');
    }
}

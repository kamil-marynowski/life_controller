<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->method() === 'GET') {
            return view('auth.login');
        }

        dd('Login to app');
    }

    public function register(Request $request)
    {
        if ($request->method() === 'GET') {
            return view('auth.register');
        }

        dd('Create new account');
    }
}

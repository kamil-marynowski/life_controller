<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Returns log in form view or auth user.
     *
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function login(Request $request): View|RedirectResponse
    {
        if ($request->method() === 'GET') {
            return view('auth.login');
        }

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('success', 'Wrong email or password');
    }

    /**
     * Returns register form view or register new user.
     *
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function register(Request $request): View|RedirectResponse
    {
        if ($request->method() === 'GET') {
            return view('auth.register');
        }

        $user = User::create([
            'name' => explode('@', $request->get('email'))[0],
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $user->assignRole('user');

        return redirect()->route('auth.login')->with('success', 'Account created successfully. You can sign in now.');
    }

    /**
     * Logout user.
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('auth.login');
    }
}

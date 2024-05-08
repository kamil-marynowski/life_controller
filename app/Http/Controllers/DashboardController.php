<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    /**
     * If user is logged in returns dashboard view.
     * Otherwise, redirect to log in form.
     *
     * @return View|RedirectResponse
     */
    public function __invoke(): View|RedirectResponse
    {
        if (auth()->user()) {
            return view('dashboard');
        }

        return redirect()->route('auth.login');
    }
}

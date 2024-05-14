<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
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
        if ($this->userHasRole(roles: 'user')) {
            return view(view: 'dashboard');
        }

        if ($this->userHasRole(roles: 'admin')) {
            return view(view: 'admin.dashboard');
        }

        return redirect()->route(route: 'auth.login');
    }
}

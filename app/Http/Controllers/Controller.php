<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

abstract class Controller
{
    protected function userHasRole(string $roles): bool
    {
        /** @var User $user */
        $user = auth()->user();

        if ($user) {
            return $user->hasRole($roles);
        }

        return false;
    }
}

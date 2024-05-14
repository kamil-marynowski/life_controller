<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Http\Request;

interface RepositoryInterface
{
    public function create($request): void;
}

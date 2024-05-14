<?php

declare(strict_types=1);

namespace App\Repositories\EducationController\Languages;

use App\Models\EducationController\Languages\Flashcard;
use App\Repositories\RepositoryInterface;

class FlashcardRepository implements RepositoryInterface
{
    public function create($request): void
    {
        Flashcard::create($request->all());
    }
}

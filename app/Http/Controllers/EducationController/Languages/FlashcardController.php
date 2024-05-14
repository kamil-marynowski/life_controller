<?php

declare(strict_types=1);

namespace App\Http\Controllers\EducationController\Languages;

use App\Http\Controllers\Controller;
use App\Models\EducationController\Languages\Flashcard;
use App\Models\EducationController\Languages\Language;
use App\Repositories\EducationController\Languages\FlashcardRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FlashcardController extends Controller
{
    private const ADMIN_VIEW_DIR = 'admin.education_controller.languages.flashcards.';

    private const USER_VIEW_DIR  = 'education_controller.languages.flashcards.';

    private FlashcardRepository $flashcardRepository;

    public function __construct(FlashcardRepository $flashcardRepository)
    {
        $this->flashcardRepository = $flashcardRepository;
    }

    /**
     * Returns flashcards index view.
     *
     * @param Language $language
     * @return View
     */
    public function index(Language $language): View
    {
        if ($this->userHasRole(roles: 'admin')) {
           return view(view: self::ADMIN_VIEW_DIR . 'index', data: [
               'language' => $language
           ]);
        }

        return view(view: self::USER_VIEW_DIR . 'index', data: [
            'language' => $language,
        ]);
    }

    /**
     * Returns admin create new flashcard form view.
     *
     * @param Language $language
     * @return View
     */
    public function create(Language $language): View
    {
        return view(view: self::ADMIN_VIEW_DIR . 'create', data: [
            'language' => $language,
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->flashcardRepository->create($request);

        return redirect()
            ->route('education_controller.languages.flashcards.index')
            ->with('success', 'New flashcard created');
    }
}

<?php

declare(strict_types=1);

namespace App\Http\Controllers\EducationController\Languages;

use App\Http\Controllers\Controller;
use App\Models\EducationController\Languages\Language;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Education controller - Language Controller
 */
class LanguageController extends Controller
{
    /**
     * Returns languages list view.
     *
     * @return View
     */
    public function index(): View
    {
        /** @var Language[] $languages */
        $languages = Language::all();

        /** @var User $user */
        $user = auth()->user();
        if ($user->hasRole(roles: 'admin')) {
            return view(view: 'admin.education_controller.languages.index', data: [
                'languages' => $languages,
            ]);
        }

        return view(view: 'education_controller.languages.index', data: [
            'languages' => $languages,
        ]);
    }

    /**
     * Returns admin create new education controller language form.
     *
     * @return View
     */
    public function create(): View
    {
        return view(view:'admin.education_controller.languages.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Language::create($request->all());

        return redirect()->route('education_controller.languages.index');
    }

    /**
     * @param Language $language
     * @return View
     */
    public function show(Language $language): View
    {
        return view(view: 'education_controller.languages.show', data: [
            'language' => $language,
        ]);
    }
}

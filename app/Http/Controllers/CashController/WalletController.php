<?php

declare(strict_types=1);

namespace App\Http\Controllers\CashController;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        /** @var User $user */
        $user = auth()->user();
        /** @var Wallet[] $wallets */
        $wallets = Wallet::where('user_id', $user->id)->get();

        return view('cash_controller.wallets.index', [
            'wallets' => $wallets,
        ]);
    }

    public function create(): View
    {
        return view('cash_controller.wallets.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Wallet::create($request->all());

        return redirect()->route('cash_controller.wallets.index')->with('success', 'CREATED');
    }

    public function edit(Wallet $wallet): View
    {
        return view('cash_controller.wallets.edit', [
            'wallet' => $wallet,
        ]);
    }

    public function update(Request $request, Wallet $wallet): RedirectResponse
    {
        $wallet->update($request->all());

        return redirect()->route('cash_controller.wallets.index')->with('success', 'UPDATED');
    }

    public function destroy(Wallet $wallet): RedirectResponse
    {
        $wallet->delete();

        return redirect()->route('cash_controller.wallets.index')->with('success', 'DELETED');
    }
}

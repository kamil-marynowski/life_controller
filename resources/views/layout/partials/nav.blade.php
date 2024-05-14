<nav class="w-2/12 min-h-screen float-left bg-blue-500 text-white">
    <div class="w-full h-16 flex items-center px-4 py-2 text-2xl font-bold bg-blue-500" style="border-bottom: 1px solid rgba(255, 255, 255, 0.25); border-right: 1px solid rgba(255, 255, 255, 0.25);">
        Life controller
    </div>
    <div class="px-4">
        <header class="w-full py-2" style="border-bottom: 1px solid rgba(255, 255, 255, 0.25)">
            <h2 class="text-xl font-bold">General</h2>
        </header>
        <a href="{{ route('dashboard') }}" title="Dashboard">
            <div class="w-full py-2">
                Dashboard
            </div>
        </a>
        <header class="w-full py-2" style="border-bottom: 1px solid rgba(255, 255, 255, 0.25)">
            <h2 class="text-xl font-bold">Cash controller</h2>
        </header>
        <a href="{{ route('cash_controller.wallets.index') }}" title="Wallets">
            <div class="w-full py-2">
                Wallets
            </div>
        </a>
        <a href="{{ route('cash_controller.wallets.index') }}" title="Bank accounts">
            <div class="w-full py-2">
                Bank accounts
            </div>
        </a>
        <a href="{{ route('cash_controller.wallets.index') }}" title="Bank accounts">
            <div class="w-full py-2">
                Payments
            </div>
        </a>
        <a href="{{ route('cash_controller.wallets.index') }}" title="Bank accounts">
            <div class="w-full py-2">
                Debts
            </div>
        </a>
        <header class="w-full py-2" style="border-bottom: 1px solid rgba(255, 255, 255, 0.25)">
            <h2 class="text-xl font-bold">Education controller</h2>
        </header>
        <a href="{{ route('education_controller.languages.index') }}" title="Education controller - languages">
            <div class="w-full py-2">
                Languages
            </div>
        </a>
    </div>
</nav>


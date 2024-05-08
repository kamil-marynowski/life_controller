<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Virtual life assistant.">
    <meta name="keywords" content="virtual, life, assistant">

    <title>Life controller</title>
    @vite('resources/js/app.js')
</head>
<body>
<main class="w-full h-full flex items-center justify-center">
    <form id="register-form" class="bg-white w-1/4 px-8 py-8 border-solid border-4 rounded border-gray-400"
          action="{{ route('auth.register') }}" method="POST"
    >
        @csrf
        <header class="w-full mb-3">
            <h1 class="text-2xl">Create new account</h1>
        </header>
        <div class="w-full mb-3">
            <label class="text-lg" for="email">E-mail</label>
            <input id="email" class="w-full p-2 border-2 border-gray-400" type="email" name="email" maxlength="2083" required>
        </div>
        <div class="w-full mb-3">
            <label class="text-lg" for="password">Password</label>
            <input id="password" class="w-full p-2 border-2 border-gray-400" type="password" name="password" required>
        </div>
        <div class="w-full mb-3">
            <label class="text-lg" for="password">Confirm password</label>
            <input id="password" class="w-full p-2 border-2 border-gray-400" type="password" name="confirm_password" required>
        </div>
        <div class="w-full mb-3">
            <button class="w-1/4 h-full bg-blue-500 text-white px-2 py-2">
                Sign up
            </button>
        </div>
        <div class="w-full">
            <span>Already have an account?</span>
            <a class="font-bold text-blue-500" href="{{ route('auth.login') }}" title="Sign in">
                Sign in
            </a>
        </div>
    </form>
</main>
</body>
</html>

<div class="w-full h-16 px-6 py-2 text-xl bg-blue-500 text-white">
    <div class="h-full flex items-center float-right">
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Logout</button>
        </form>
    </div>
</div>

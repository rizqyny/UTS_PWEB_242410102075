<nav class="bg-transparent">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="{{ route('dashboard') }}" class="text-xl font-extrabold tracking-tight">Adrian Garage</a>

            <div class="hidden md:flex items-center ml-6 space-x-3 bg-white/5 rounded-full px-3 py-2">
                <a href="{{ route('dashboard') }}" class="text-lg px-3 py-1 rounded-full hover:bg-white/30 transitionc">Dashboard</a>
                <a href="{{ route('pengelolaan') }}" class="text-lg px-3 py-1 rounded-full hover:bg-white/30 transition">Pengelolaan</a>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <a href="{{ route('profile') }}" class="font-bold text-lg px-3 py-1 rounded-full hover:bg-white/30 transition">
                {{ $username }}
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-white text-black px-3 py-1 rounded-full font-medium hover:opacity-90 transition">Logout</button>
            </form>
        </div>
    </div>
</nav>

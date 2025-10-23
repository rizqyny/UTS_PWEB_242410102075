@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-[65vh] flex items-center justify-center">
    <div class="max-w-md w-full bg-white/15 backdrop-blur rounded-2xl p-8 shadow-lg">
        <h2 class="text-3xl font-bold mb-4">Login</h2>
        <p class="text-m text-gray-300 mb-6">Masukkan Username dan Password anda.</p>

        <form method="POST" action="{{ route('doLogin') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xl mb-1">Username</label>
                <input type="text" name="username" required
                    class="text-xl w-full rounded-lg px-3 py-2 bg-transparent border border-white/20 focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div>
                <label class="block text-xl mb-1">Password</label>
                <input type="password" name="password" required
                    class="text-xl w-full rounded-lg px-3 py-2 bg-transparent border border-white/20 focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 rounded-lg mt-2">
                Login
            </button>
        </form>
    </div>
</div>
@endsection

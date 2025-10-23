@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section class="hero-gradient min-h-[75vh] flex items-center">
    <div class="container mx-auto px-6 py-12 grid md:grid-cols-2 gap-8 items-center">
        <div class="space-y-6">
            <span class="inline-block bg-white/10 text-white/80 px-3 py-1 rounded-full text-m">Website dalam bentuk beta — Learn more    →</span>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                Selamat datang, {{ $username ?? 'Pengunjung' }}
            </h1>

            <p class="max-w-xl text-gray-200/80">
                Website pengelolaan garasi adrian yang sangat kaya, keren, baik, tidak sombong, alim, ramah, hebat aamiin.
            </p>

            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="inline-block bg-white text-black font-semibold px-5 py-3 rounded-full shadow hover:opacity-90 transition">Get started</a>
                <p class="text-sm text-gray-300 hover:text-white">Get in touch</p>
            </div>
        </div>

        <div class="hidden md:block">
            <div class="h-64 w-full rounded-lg bg-gradient-to-b from-transparent to-white/5 flex items-center justify-center">
                <div class="text-[15px] leading-tight text-white select-none">
                    <pre class="whitespace-pre-wrap">
    ⠀⢀⠀⢀⠀⣀⣴⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀
    ⠀⣠⣤⣼⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣶⣆⠀⠀⠀⠀⠀⠀
    ⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠿⡿⣿⣿⣿⣿⣿⣿⣷⣶⣤⡀⠀
    ⠸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣾⣷⣷⣿⣿⣿⣿⣿⣿⣿⣷⣷⡀
    ⠀⠇⣿⣿⣿⣿⣿⣿⣿⣿⣿⢫⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇
    ⠀⠀⠘⠛⠛⠛⠛⠛⠻⠿⠿⠆⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣟⠛⣿⣿⠟⠛⠃
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
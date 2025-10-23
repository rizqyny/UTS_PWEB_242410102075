<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') — Adrian Garage</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .hero-gradient {
            background: radial-gradient(ellipse at bottom, rgba(124,58,237,0.22) 0%, rgba(99,102,241,0.12) 20%, rgba(0,0,0,0.9) 60%),
                        linear-gradient(180deg, #0b0b11 0%, #1f093d 40%, #6b21a8 100%);
            background-blend-mode: overlay;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col text-white bg-black">

    @if(session()->has('username'))
        <x-navbar :username="session('username')" />
    @else

        @unless(Request::routeIs('login'))
        <div class="container mx-auto px-6 py-6 flex justify-end">
            <a href="{{ route('login') }}" class="inline-block bg-white text-black font-semibold px-4 py-2 rounded-full shadow hover:opacity-90 transition">
                Login
            </a>
        </div>
        @endunless
    @endif

    <main class='grow container mx-auto'>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>

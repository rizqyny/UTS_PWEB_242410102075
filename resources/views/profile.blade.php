@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="text-center mb-8">
        <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-tr from-purple-500 to-indigo-500 flex items-center justify-center shadow-lg shadow-purple-800/40">
            <span class="text-3xl font-extrabold text-white uppercase">
                {{ substr($profile['username'], 0, 1) }}
            </span>
        </div>
        <h3 class="mt-4 text-3xl font-bold text-white tracking-tight">
            {{ $profile['username'] }}
        </h3>
        <p class="text-purple-300/80 font-medium">{{ $profile['status'] }}</p>
    </div>

    <div class="space-y-5">
        <div class="font-medium flex items-center justify-between space-x-20 border-b border-white/10 pb-3">
            <span class="font-semibold text-gray-300">Hobi</span>
            <span class="text-white font-medium">{{ $profile['hobi'] }}</span>
        </div>
        <div class="font-medium flex items-center justify-between space-x-10 border-b border-white/10 pb-3">
            <span class="font-semibold text-gray-300">Member Since</span>
            <span class="text-white font-medium">{{ $profile['member_since'] }}</span>
        </div>
    </div>
@endsection
